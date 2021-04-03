<?php

class Order {

    public static function addOrder($userId, $dietId) {

            $sqlTypes = ['user_id' => $userId, 'diet_id' => $dietId];
            $query = "INSERT INTO orders(user_id, diet_id) VALUES(:user_id, :diet_id)";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;

    }

}

?>