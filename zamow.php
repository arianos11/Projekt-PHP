<?php

@include_once(__DIR__.'./modules/start.php');

@include_once(__DIR__.'./classes/Order.php');

if(!isset($_SESSION['logged'])) {
    echo "Musisz być zalogowany<br>";
    echo "Zostaniesz przeniesiony do strony logowania za 5 sekund";
    header( "refresh:5;url=logowanie.php" );
} else {
    Order::addOrder($_SESSION['logged'], (int)$_GET['id']);
    echo "Zamówienie złożone<br>";
    echo "Zostaniesz przeniesiony do panelu zarządzania za 5 sekund";
    header( "refresh:5;url=panel_zarzadzania" );
}

?>