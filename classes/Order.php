<?php

class Order {

    public static function addOrder($userId, $dietId) {

            $sqlTypes = ['user_id' => $userId, 'diet_id' => $dietId];
            $query = "INSERT INTO orders(user_id, diet_id) VALUES(:user_id, :diet_id)";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;

    }

    public static function deleteOrder($user_id, $order_id) {

            $sqlTypes = ['user_id' => $user_id,'order_id' => $order_id];
            $query = "SELECT * FROM orders WHERE order_id = :order_id AND user_id = :user_id";
            if(!empty($GLOBALS['db']->query($query, $sqlTypes))) {
                $sqlTypes = ['order_id' => $order_id];
                $query = "DELETE FROM orders WHERE order_id = :order_id";
                $sql = $GLOBALS['db']->query($query, $sqlTypes);
                return $sql;
            } else {
                return "Brak uprawnień";
            }  

    }

    public static function getOrders($id) {

            $sqlTypes = ['user_id' => $id];
            $query = "SELECT o.order_id, d.diet_name, d.diet_price FROM orders o JOIN diets d ON d.diet_id = o.diet_id WHERE o.user_id = :user_id";
            $sql = $GLOBALS['db']->query($query, $sqlTypes);
            return $sql;

    }

}

?>