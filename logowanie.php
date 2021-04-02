<?php

@include_once(__DIR__.'/modules/start.php');

?>

<form class="login" action="logowanie.php" method="post">
    <h1>Zaloguj się</h1>
    <input class="login--input" type="text" name="email" placeholder="Adres email" value="<?php echo isset($_SESSION['login_email']) ? $_SESSION['login_email'] : '' ?>">
    <input class="login--input" type="password" name="password" placeholder="Hasło">
    <input class="login--input__button" type="submit" value="Zaloguj">
    <span>Jeżeli nie masz konta <a href="rejestracja.php">zarejestruj się</a></span>
    <p style="color: red"><?php echo isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '' ?></p>
</form>


<?php

@include_once(__DIR__.'/classes/User.php');

if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $result = User::loginUser($_POST['email'],$_POST['password']);
    if($result[0] === "success") {
        echo "Success";
        print_r($result[1]);
        print_r(date("Y-m-d H:i:s"));
        unset($_SESSION['login']);
        $_SESSION['logged'] = $result[1];
        $_SESSION['logged_time'] = date("Y-m-d H:i:s");
        if(isset($_SESSION['login_error'])) {
            unset($_SESSION['login_error']);
        }
        if(isset($_SESSION['login_email'])) {
            unset($_SESSION['login_email']);
        }
        header("Location: index.php");
    } else {
        $_SESSION['login_error'] = $result[1];
        $_SESSION['login_email'] = $_POST['email'];
        header("Location: logowanie.php");
    }

}

@include_once(__DIR__.'/modules/end.php');

?>