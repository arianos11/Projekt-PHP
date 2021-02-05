<?php

    @include_once(__DIR__.'/modules/start.php');

    session_destroy();

    header('Location: logowanie.php');

?>