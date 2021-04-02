<?php

@include_once(__DIR__.'/../config/init.php');

//link
$link = $_SERVER[REQUEST_URI];
$link = explode('/',$link);

//dynamic css from link

$count = count($link);
$dynamic = '/';
for ($i = 3; $i < $count; $i++) {
    $dynamic .= '../';
}

//title from link

$title = $link[$count - 1];
if(empty($title)) {
    $title = $link[count($link) - 2];
}
$title = str_replace('.php', '', $title);
$title = str_replace('_', ' ', $title);
$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $title);
$title = ucfirst($title);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel='stylesheet' href='./stylesheets/style.css'>
</head>
<body>

<?php
    // print_r($_SESSION);
    @include_once(__DIR__.'/naglowekAdmin.php');
?>