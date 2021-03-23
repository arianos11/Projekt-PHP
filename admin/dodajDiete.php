<?php

@include_once(__DIR__.'/../adminModules/startAdmin.php');

@include_once(__DIR__.'/../classes/Admin.php');

Admin::checkAdmin($_SESSION['admin_logged']);

?>

<section class="mainAdmin">
    Dodaj diete
</section>
 
<?php

@include_once(__DIR__.'/../adminModules/end.php');


?>