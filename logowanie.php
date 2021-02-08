<?php

@include_once(__DIR__.'/modules/start.php');

?>

<form action="logowanie.php" method="post">
    <input type="text" name="email" placeholder="Adres email" value="<?php echo isset($_SESSION['login_email']) ? $_SESSION['login_email'] : '' ?>">
    <input type="password" name="password" placeholder="Hasło">
    <input type="submit" value="Zaloguj">
</form>
<p style="color: red"><?php echo isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '' ?></p>

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
        header("Location: index.php");
    } else {
        $_SESSION['login_error'] = $result[1];
        $_SESSION['login_email'] = $_POST['email'];
        header("Location: logowanie.php");
    }

}

@include_once(__DIR__.'/modules/end.php');

?>