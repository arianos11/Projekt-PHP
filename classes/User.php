<?php

    class User {

        public static function registerUser($first, $second, $email, $password1, $password2) {

            //Check if email exists
            $sqlTypes = ['email' => $email];
            $query = "SELECT user_id FROM users WHERE user_email = :email";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            if(!empty($sql)) {
                return ['error', 'Email jest już zarejestrowany!'];
            }

            // Regex check email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return ['error', 'Niepoprawny adres email!'];
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
            $query = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password)
                      VALUES(:first, :last, :email, :password)";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);

            return ['success', 'Poprawna rejestracja'];
            
        } 

    }

?>