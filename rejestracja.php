<?php

@include_once(__DIR__.'/pages/start.php');

?>

<h1>Rejestracja</h1>

<form action="rejestracja.php" method="post">
    <input type="text" name="first" id="">
    <input type="text" name="last" id="">
    <input type="text" name="email" id="">
    <input type="password" name="password1" id="">
    <input type="password" name="password2" id="">
    <input type="submit" value="Rejestrajca">
</form>

<?php

@include_once(__DIR__.'/classes/User.php');
$result = User::registerUser($_POST['first'], $_POST['last'], $_POST['email'], $_POST['password1'], $_POST['password2']);
print_r($result);

@include_once(__DIR__.'/pages/end.php');

?>