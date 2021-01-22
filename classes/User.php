<?php

    class User {

        public static function registerUser($first, $second, $email, $password1, $password2) {

            //Check passwords
            if($password1 !== $password2) {
                return ['error', 'Hasła się nie zgadzają!'];
            } 

            //Regex check password
            $pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,})/g";
            if(!preg_match($pattern, $password1)) {
                return ['error', 'Hasło musi zawierać co najmniej 8 znaków, wielką i małą literę, cyfrę oraz znak specjalny!'];
            }

            //Regex check email
            $pattern = "/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g";
            if(!preg_match($pattern, $email)) {
                return ['error', 'Niepoprawny adres email!'];
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