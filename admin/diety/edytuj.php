<?php

@include_once(__DIR__.'/../../adminModules/startAdmin.php');

@include_once(__DIR__.'/../../classes/Admin.php');

@include_once(__DIR__.'/../../classes/Diet.php');

Admin::checkAdmin($_SESSION['admin_logged']);

$diet = Diet::getDiet($_GET['id']);
?>

<section class="mainAdmin">
    <form action="edytuj.php?id=<?php echo $_GET['id']?>" method="post">
        <input type="text" name="name" id="name" placeholder="Nazwa diety" value="<?php echo $diet[0]['diet_name']?>">
        <input type="number" name="price" id="price" placeholder="Cena" value="<?php echo $diet[0]['diet_price']?>">
        <input type="file" name="photo" id="photo" value="<?php echo $diet[0]['diet_photo']?>">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Opis diety"><?php echo $diet[0]['diet_description']?></textarea>
        <input type="checkbox" name="status" id="status">
        <input type="submit" value="Zapisz">
    </form>
</section>
 
<?php

if(isset($_POST['name']) && isset($_POST['price'])
    && isset($_POST['photo']) && isset($_POST['description']) 
    && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description'])) {
    
    $status = 0;    
    if($_POST['status'] == 'on') {
        $status = 1;
    };
    $result = Diet::updateDiet($_GET['id'],$_POST['name'],$_POST['price'],$_POST['photo'],$_POST['description'],$status);
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


@include_once(__DIR__.'/../../adminModules/end.php');


?>