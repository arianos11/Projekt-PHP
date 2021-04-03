<?php

@include_once(__DIR__.'/../modules/start.php');

@include_once(__DIR__.'/../classes/Order.php');

@include_once(__DIR__.'/../classes/User.php');

User::checkUser($_SESSION['logged']);

$data = Order::deleteOrder($_SESSION['logged'], $_GET['id']);

if(!empty($data)) {
    echo $data;
} else {
    echo "Zamówienie anulowane<br>";
    echo "Zostaniesz przeniesiony do panelu zarządzania za 3 sekundy";
    header( "refresh:3;url=/projektArianOrwat4D/panel_zarzadzania" );
}

?>