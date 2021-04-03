<?php

@include_once(__DIR__.'/../modules/start.php');

@include_once(__DIR__.'/../classes/User.php');

User::checkUser($_SESSION['logged']);

$data = User::getUserData($_SESSION['logged']);

?>

<section>
    <form class="login" action="edytuj_dane.php" method="post">
        <h1>Edytuj dane</h1>
        <input class="login--input" type="text" name="user_first_name" id="user_first_name" placeholder="Imie" value="<?php echo $data[0]['user_first_name'];?>">
        <input class="login--input" type="text" name="user_last_name" id="user_last_name" placeholder="Nazwisko" value="<?php echo $data[0]['user_last_name'];?>">
        <input class="login--input" type="text" name="user_email" id="user_email" placeholder="email" value="<?php echo $data[0]['user_email'];?>">
        <input class="login--input" type="text" name="user_city" id="user_city" placeholder="Miasto" value="<?php echo $data[0]['user_city'];?>">
        <input class="login--input" type="text" name="user_postal_code" id="user_postal_code" placeholder="Kod pocztowy" value="<?php echo $data[0]['user_postal_code'];?>">
        <input class="login--input" type="text" name="user_adress" id="user_adress" placeholder="Adres" value="<?php echo $data[0]['user_adress'];?>">
        <input class="login--input__button" type="submit" value="Zapisz">
    </form>
</section>

<?php

if(isset($_POST['user_first_name']) && isset($_POST['user_last_name'])
    && isset($_POST['user_email']) && isset($_POST['user_city']) 
    && isset($_POST['user_postal_code']) && isset($_POST['user_adress']) 
    && !empty($_POST['user_first_name']) && !empty($_POST['user_last_name']) 
    && !empty($_POST['user_email']) && !empty($_POST['user_city']) 
    && !empty($_POST['user_postal_code']) && !empty($_POST['user_adress'])) {
    
    $result = User::updateUserData($_SESSION['logged'],$_POST['user_first_name'],$_POST['user_last_name'],$_POST['user_email'],$_POST['user_city'],$_POST['user_postal_code'],$_POST['user_adress']);
    if(empty($result)) {
        echo "Success";
        unset($_SESSION['diet_name']);
        unset($_SESSION['diet_price']);
        unset($_SESSION['diet_photo']);
        unset($_SESSION['diet_description']);
        unset($_SESSION['diet_status']);
        header("Location: /projektArianOrwat4D/admin/diety");
    } else {
        $_SESSION['diet_name'] = $_POST['name'];
        $_SESSION['diet_price'] = $_POST['price'];
        $_SESSION['diet_photo'] = $_POST['photo'];
        $_SESSION['diet_description'] = $_POST['description'];
        $_SESSION['diet_status'] = $status;
    }

}

@include_once(__DIR__.'/../modules/end.php');


?>