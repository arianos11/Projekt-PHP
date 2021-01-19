<?php

    class User {

        public static function registerUser($first, $second, $email, $password1, $password2) {
            if($password1 === $password2) {

                $options = [
                    'cost' => 12
                ];

                $password = password_hash($password1, PASSWORD_BCRYPT, $options);

                $sqlTypes = ['first' => $first, 'last' => $second, 'email' => $email, 'password' => $password];
                $query = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password)
                          VALUES(:first, :last, :email, :password)";
                $sql = $GLOBALS['db']->query($query, $sqlTypes);

            } else {
                return ['error', 'Hasła się nie zgadzają!'];
            }
            
        } 

    }

?>