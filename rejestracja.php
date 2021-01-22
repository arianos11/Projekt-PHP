<?php

@include_once(__DIR__.'/modules/start.php');

?>

<h1>Rejestracja</h1>

<form action="rejestracja_potwierdzenie.php" method="post">
    <input type="text" name="first" id="" value="<?php echo isset($_SESSION['register_name_1']) ? $_SESSION['register_name_1'] : "" ?>">
    <input type="text" name="last" id="" value="<?php echo isset($_SESSION['register_name_2']) ? $_SESSION['register_name_2'] : "" ?>">
    <input type="text" name="email" id="" value="<?php echo isset($_SESSION['register_email']) ? $_SESSION['register_email'] : "" ?>">
    <input type="password" name="password1" id="">
    <input type="password" name="password2" id="">
    <input type="submit" value="Rejestrajca">
</form>

<?php

if(isset($_SESSION['register'])) {
    if(isset($_SESSION['register_error'])) {
        echo $_SESSION['register_error'];
    } 

    if(isset($_SESSION['register_name_1'])) {
        unset($_SESSION['register_name_1']);
    }

    if(isset($_SESSION['register_name_2'])) {
        unset($_SESSION['register_name_2']);
    }

    if(isset($_SESSION['register_email'])) {
        unset($_SESSION['register_email']);
    }

}

@include_once(__DIR__.'/modules/end.php');

?>