<nav class="menu">
    <div class="menu--left">
        <div class="menu--left--logo">
            <p>Dobre żarcie</p>
        </div>
    </div>
    <div class="menu--right">
        <a href="/projekt/" class="menu--right--element">Start</a>
        <a href="/jak-gotujemy" class="menu--right--element">Jak gotujemy</a>
        <a href="/oferta" class="menu--right--element">Oferta</a>
        <?php 
            if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                echo "<a href='zarzadzanie.php' class='menu--right--element'>Panel zarządzania</a>";
            } else {
                echo "<a href='logowanie.php' class='menu--right--element'>Zaloguj</a>";
            }  
        ?>
    </div>
</nav>