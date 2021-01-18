<?php

    $db_url = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = 'projektphp';

    $con = mysqli_connect($db_url, $db_user, $db_password, $db_name);

    if (mysqli_connect_errno()) {
        echo "Błąd łączenie z bazą danych: " . mysqli_connect_error();
        exit();
    }

    $GLOBALS['db'] = $con;

?>