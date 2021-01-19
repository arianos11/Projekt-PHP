<?php

@include_once(__DIR__.'/pages/start.php');

?>

<?php

@include_once(__DIR__.'/classes/User.php');
if(isset($_POST['first']) && isset($_POST['last']) && !empty($_POST['first']) && !empty($_POST['last'])) {

    if(isset($_POST['email']) && !empty($_POST['email'])) {

        if(isset($_POST['password1']) && isset($_POST['password2']) && !empty($_POST['password1']) && !empty($_POST['password2'])) {

            $result = User::registerUser($_POST['first'], $_POST['last'], $_POST['email'], $_POST['password1'], $_POST['password2']);
            // print_r($result);

        } else {
            $_SESSION['register_error'] = "Brak hasła!";
            header("Location: rejestracja.php");
        }

    } else {
        $_SESSION['register_error'] = "Brak emaila!";
        header("Location: rejestracja.php");
    }

} else {
    $_SESSION['register_error'] = 'Brak imienia lub nazwiska!';
    header("Location: rejestracja.php");
}

@include_once(__DIR__.'/pages/end.php');

?>