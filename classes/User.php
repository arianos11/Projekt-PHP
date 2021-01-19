<?php

    class User {

        public static function registerUser($first, $second, $email, $password1, $password2) {
            if($password1 === $password2) {
                $result = array(
                    'imie' => $first, 
                    'nazwisko' => $second, 
                    'email' => $email, 
                    'hasło' => $password
                );
                return $result;
            } else {
                return FALSE;
            }
            
        } 

    }

?>