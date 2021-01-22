<?php

session_start();

@include_once(__DIR__.'/db.php');

$GLOBALS['db'] = new DB;
$GLOBALS['db']->connect();

?>