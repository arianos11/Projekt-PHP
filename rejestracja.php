<?php

@include_once(__DIR__.'/modules/start.php');

?>


<form class="login" action="rejestracja_potwierdzenie.php" method="post">
    <h1>Rejestracja</h1>
    <input class="login--input" type="text" name="first" placeholder="Imie" value="<?php echo isset($_SESSION['register_name_1']) ? $_SESSION['register_name_1'] : "" ?>">
    <input class="login--input" type="text" name="last" placeholder="Nazwisko" value="<?php echo isset($_SESSION['register_name_2']) ? $_SESSION['register_name_2'] : "" ?>">
    <input class="login--input" type="text" name="email" placeholder="Adres email" value="<?php echo isset($_SESSION['register_email']) ? $_SESSION['register_email'] : "" ?>">
    <input class="login--input" type="password" name="password1" placeholder="Hasło">
    <input class="login--input" type="password" name="password2" placeholder="Potwierdź hasło">
    <input class="login--input__button" type="submit" value="Rejestrajca">
    <p style="color: red"><?php echo isset($_SESSION['register_error']) ? $_SESSION['register_error'] : '' ?></p>
</form>

<?php

@include_once(__DIR__.'/modules/end.php');

?>