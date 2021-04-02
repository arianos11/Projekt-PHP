<?php

    class Diet {

        public static function getAllDiets() {
            $sqlTypes = [];
            $query = "SELECT * FROM diets";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;
        }

        public static function getDiet($id) {
            $sqlTypes = ['id' => $id];
            $query = "SELECT * FROM diets WHERE diet_id = :id";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;
        }

        public static function addDiet($name, $price, $photo, $description) {

            $sqlTypes = ['name' => $name, 'price' => $price, 'photo' => $photo, 'description' => $description];
            $query = "INSERT INTO diets(diet_name, diet_price, diet_photo, diet_description) VALUES (:name, :price, :photo, :description)";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;

        }

        public static function updateDiet($id, $name, $price, $photo, $description, $status) {

            $sqlTypes = ['id' => $id, 'name' => $name, 'price' => $price, 'photo' => $photo, 'description' => $description, 'status' => $status];
            $query = "UPDATE diets SET diet_name = :name, diet_price = :price, diet_photo = :photo, diet_description = :description, diet_status = :status WHERE diet_id = :id";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;

        }

        public static function deleteDiet($id) {
            $sqlTypes = ['id' => $id];
            $query = "DELETE FROM diets WHERE diet_id = :id";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;
        }

    }

?>