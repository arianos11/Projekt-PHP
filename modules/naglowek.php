<nav class="menu">
    <div class="menu--left">
        <div class="menu--left--logo">

        </div>
    </div>
    <div class="menu--right">
        <a class="menu--right--element">Start</a>
        <a class="menu--right--element">Jak gotujemy</a>
        <a class="menu--right--element">Oferta</a>
        <?php 
            if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                echo "<a href='/admin' class='menu--right--element'>Panel zarządzania</a>";
            } else {
                echo "<a href='logowanie.php' class='menu--right--element'>Zaloguj</a>";
            }  
        ?>
    </div>
</nav>