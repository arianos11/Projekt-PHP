<?php

@include_once(__DIR__.'/../config/init.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    print_r($_SESSION);
    @include_once(__DIR__.'/naglowek.php');
?>