<nav class="navAdmin">
    <?php
        if($_SESSION['admin_logged']) {
    ?>
    <a href="/projektArianOrwat4D/admin/diety">Diety</a>
    <a href="/projektArianOrwat4D/admin/rejestracja.php">Dodaj admina</a>
    <a href="/projektArianOrwat4D/wyloguj.php">Wyloguj się</a>
    <?php
        }
    ?>
</nav>