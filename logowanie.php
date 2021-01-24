<?php

@include_once(__DIR__.'/modules/start.php');

?>

<form action="logowanie.php" method="post">
    <input type="text" name="email">
    <input type="text" name="password">
</form>

<?php

@include_once(__DIR__.'/modules/end.php');

?>