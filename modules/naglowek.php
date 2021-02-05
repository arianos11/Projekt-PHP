<div>
    <?php 
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            echo "<h2>Zalogowany</h2>";
            echo $_SESSION['logged'];
            echo "<br />";
            echo $_SESSION['logged_time'];
        } else {
            echo "<h2>Zaloguj się</h2>";
        }  
    ?>
</div>