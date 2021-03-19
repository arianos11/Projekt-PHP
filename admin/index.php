<?php

@include_once(__DIR__.'/../modules/startAdmin.php');

@include_once(__DIR__.'/../classes/Admin.php');

Admin::checkAdmin($_SESSION['admin_logged']);

?>

<section>
    Strona administratora
</section>

<?php

@include_once(__DIR__.'/../modules/end.php');


?>