<?php


@include_once(__DIR__.'/../modules/start.php');

@include_once(__DIR__.'/../classes/User.php');

User::checkUser($_SESSION['logged']);

?>

<section>
    <form class="login" action="zmiana_hasla.php" method="post">
        <h1>Zmiana hasła</h1>
        <input class="login--input" type="password" name="password1" id="password1" placeholder="Hasło">
        <input class="login--input" type="password" name="password2" id="password2" placeholder="Powtórz hasło">
        <input class="login--input__button" type="submit" value="Zmień">
        <p style="color: red"><?php echo isset($_SESSION['changePassword_error']) ? $_SESSION['changePassword_error'] : '' ?></p>
    </form>
</section>

<?php

if(isset($_POST['password1']) && isset($_POST['password2'])
    && !empty($_POST['password1']) && !empty($_POST['password2'])) {
    
    $result = User::updatePasswordUser($_SESSION['logged'], $_POST['password1'], $_POST['password2']);
    if(empty($result)) {
        echo "Success";
        header("Location: /projektArianOrwat4D/panel_zarzadzania");
    } else {
        $_SESSION['changePassword_error'] = $result[1];
        header("Location: zmiana_hasla.php");
    }
}


@include_once(__DIR__.'/../modules/end.php');


?>