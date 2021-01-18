<?php

session_start();

@include_once('./config/db.php');
@include_once('./main.php');


$GLOBALS['db']->close();
?>