<?php

@include_once(__DIR__.'/../adminModules/startAdmin.php');

?>

<h1>Rejestracja</h1>

<form action="rejestracja_potwierdzenie.php" method="post">
    <input type="text" name="first" placeholder="Imie" value="<?php echo isset($_SESSION['register_name_1']) ? $_SESSION['register_name_1'] : "" ?>">
    <input type="text" name="last" placeholder="Nazwisko" value="<?php echo isset($_SESSION['register_name_2']) ? $_SESSION['register_name_2'] : "" ?>">
    <input type="text" name="email" placeholder="Adres email" value="<?php echo isset($_SESSION['register_email']) ? $_SESSION['register_email'] : "" ?>">
    <input type="password" name="password1" placeholder="Hasło">
    <input type="password" name="password2" placeholder="Potwierdź hasło">
    <input type="submit" value="Rejestrajca">
</form>
<p style="color: red"><?php echo isset($_SESSION['register_error']) ? $_SESSION['register_error'] : '' ?></p>

<?php

@include_once(__DIR__.'/../adminModules/end.php');

?>