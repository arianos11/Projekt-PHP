<nav>
    <?php
        if($_SESSION['admin_logged']) {
    ?>
    <a href="dodajDiete.php">Dodaj Diete</a>
    <a href="/projekt/wyloguj.php">Wyloguj się</a>
    <?php
        }
    ?>
</nav>