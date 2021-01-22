<?php

@include_once(__DIR__.'/modules/start.php');

?>

<?php

@include_once(__DIR__.'/classes/User.php');
$_SESSION['register'] = TRUE;
if(isset($_POST['first']) && isset($_POST['last']) && !empty($_POST['first']) && !empty($_POST['last'])) {

    if(isset($_POST['email']) && !empty($_POST['email'])) {

        if(isset($_POST['password1']) && isset($_POST['password2']) && !empty($_POST['password1']) && !empty($_POST['password2'])) {

            $result = User::registerUser($_POST['first'], $_POST['last'], $_POST['email'], $_POST['password1'], $_POST['password2']);

            if($result[0] === "sucess") {
                echo "Success";
                unset($_SESSION['register']);
            } else {
                $_SESSION['register_error'] = $result[1];
                $_SESSION['register_name_1'] = $_POST['first'];
                $_SESSION['register_name_2'] = $_POST['last'];
                $_SESSION['register_email'] = $_POST['email'];
                header("Location: rejestracja.php");
            }

        } else {
            $_SESSION['register_error'] = "Brak hasła!";
            $_SESSION['register_name_1'] = $_POST['first'];
            $_SESSION['register_name_2'] = $_POST['last'];
            $_SESSION['register_email'] = $_POST['email'];
            header("Location: rejestracja.php");
        }

    } else {
        $_SESSION['register_error'] = "Brak emaila!";
        $_SESSION['register_name_1'] = $_POST['first'];
        $_SESSION['register_name_2'] = $_POST['last'];
        header("Location: rejestracja.php");
    }

} else {
    $_SESSION['register_error'] = 'Brak imienia lub nazwiska!';
    header("Location: rejestracja.php");
}

@include_once(__DIR__.'/modules/end.php');

?>