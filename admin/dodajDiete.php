<?php

@include_once(__DIR__.'/../adminModules/startAdmin.php');

@include_once(__DIR__.'/../classes/Admin.php');

@include_once(__DIR__.'/../classes/Diet.php');

Admin::checkAdmin($_SESSION['admin_logged']);

?>

<section class="mainAdmin">
    <form action="dodajDiete.php" method="post">
        <input type="text" name="name" id="name" placeholder="Nazwa diety">
        <input type="number" name="price" id="price" placeholder="Cena">
        <input type="file" name="photo" id="photo">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Opis diety"></textarea>
        <input type="submit" value="Dodaj">
    </form>
</section>
 
<?php

if(isset($_POST['name']) && isset($_POST['price'])
    && isset($_POST['photo']) && isset($_POST['description']) 
    && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description'])) {

    $result = Diet::addDiet($_POST['name'],$_POST['price'],$_POST['photo'],$_POST['description']);
    if($result[0] === "success") {
        echo "Success";
        
    } else {
        $_SESSION['diet_name'] = $_POST['name'];
        $_SESSION['diet_price'] = $_POST['price'];
        $_SESSION['diet_photo'] = $_POST['photo'];
        $_SESSION['diet_description'] = $_POST['description'];
    }

} else {
    $_SESSION['diet_name'] = $_POST['name'];
    $_SESSION['diet_price'] = $_POST['price'];
    $_SESSION['diet_photo'] = $_POST['photo'];
    $_SESSION['diet_description'] = $_POST['description'];
}


@include_once(__DIR__.'/../adminModules/end.php');


?>