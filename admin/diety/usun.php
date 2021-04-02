<?php

@include_once(__DIR__.'/../../adminModules/startAdmin.php');

@include_once(__DIR__.'/../../classes/Admin.php');

Admin::checkAdmin($_SESSION['admin_logged']);

@include_once(__DIR__.'/../../classes/Diet.php');

Diet::deleteDiet($_GET['id']);

header("Location: /projektArianOrwat4D/admin/diety");

?>