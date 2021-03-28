<?php

    class Diet {

        public static function addDiet($name, $price, $photo, $description) {

            $sqlTypes = ['name' => $name, 'price' => $price, 'photo' => $photo, 'description' => $description];
            $query = "INSERT INTO diets(diet_name, diet_price, diet_photo, diet_description) VALUES (:name, :price, :photo, :description)";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return ['success'];

        }

    }

?>