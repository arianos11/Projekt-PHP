<?php

@include_once(__DIR__.'/pages/start.php');

?>

<h1>Rejestracja</h1>

<form action="rejestracja_potwierdzenie.php" method="post">
    <input type="text" name="first" id="">
    <input type="text" name="last" id="">
    <input type="text" name="email" id="">
    <input type="password" name="password1" id="">
    <input type="password" name="password2" id="">
    <input type="submit" value="Rejestrajca">
</form>

<?php

if(isset($_SESSION['register'])) {
    if(isset($_SESSION['register_error'])) {
        echo $_SESSION['register_error'];
    } 
}

@include_once(__DIR__.'/pages/end.php');

?>