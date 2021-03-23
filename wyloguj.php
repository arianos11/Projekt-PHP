<?php

    @include_once(__DIR__.'/modules/start.php');

    if($_SESSION['admin_logged']) {
        session_destroy();
        header('Location: /projekt/admin/logowanie.php');
    } else {
        session_destroy();
        header('Location: logowanie.php');
    }

?>