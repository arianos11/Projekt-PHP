<?php

    class Admin {

        public static function registerAdmin($first, $second, $email, $password1, $password2) {

            // Regex check email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return ['error', 'Niepoprawny adres email!'];
            }

            //Check if email exists
            $sqlTypes = ['email' => $email];
            $query = "SELECT admin_id FROM admins WHERE admin_email = :email";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            if(!empty($sql)) {
                return ['error', 'Email jest już zarejestrowany!'];
            }

            //Check passwords
            if($password1 !== $password2) {
                return ['error', 'Hasła się nie zgadzają!'];
            } 

            //Regex check password
            $uppercase = preg_match('@[A-Z]@', $password1);
            $lowercase = preg_match('@[a-z]@', $password1);
            $number    = preg_match('@[0-9]@', $password1);
            $specialChars = preg_match('@[^\w]@', $password1);
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 8) {
                return ['error', 'Hasło musi zawierać co najmniej 8 znaków, wielką i małą literę, cyfrę oraz znak specjalny!'];
            }

            $options = [
                'cost' => 12
            ];

            $password = password_hash($password1, PASSWORD_BCRYPT, $options);

            $sqlTypes = ['first' => $first, 'last' => $second, 'email' => $email, 'password' => $password];
            $query = "INSERT INTO admins (admin_first_name, admin_last_name, admin_email, admin_password)
                      VALUES(:first, :last, :email, :password)";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);

            if(isset($_SESSION['register'])) {
    
                if(isset($_SESSION['register_name_1'])) {
                    unset($_SESSION['register_name_1']);
                }
            
                if(isset($_SESSION['register_name_2'])) {
                    unset($_SESSION['register_name_2']);
                }
            
                if(isset($_SESSION['register_email'])) {
                    unset($_SESSION['register_email']);
                }
            
            }

            return ['success', 'Poprawna rejestracja'];
            
        } 

        public static function loginAdmin($email, $password) {

            // Regex check email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return ['error', 'Niepoprawny adres email!'];
            }

            //Check if email exists
            $sqlTypes = ['email' => $email];
            $query = "SELECT admin_id, admin_password FROM admins WHERE admin_email = :email";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            if(empty($sql)) {
                return ['error', 'Niepoprawne dane logowania'];
            }

            if(!password_verify($password, $sql[0]['admin_password'])) {
                return ['error', 'Niepoprawne dane logowania'];
            }

            return['success', $sql[0]['admin_id']];
        }

        public static function checkAdmin($login) {

            if($login) {
                return true;
            } else {
                return header("Location: /projektArianOrwat4D/admin/logowanie.php");
            }

        }

    }

?>