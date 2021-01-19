<?php

session_start();
@include_once(__DIR__.'/../config/db.php');

$GLOBALS['db'] = new DB;
$GLOBALS['db']->connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
