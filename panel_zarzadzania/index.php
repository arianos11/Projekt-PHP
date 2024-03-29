<?php

@include_once(__DIR__.'/../modules/start.php');

@include_once(__DIR__.'/../classes/Order.php');

@include_once(__DIR__.'/../classes/User.php');

User::checkUser($_SESSION['logged']);

?>

<section class="userPanel">
    <h1>Panel zarządzania</h1>
    <a class="userPanel--button" href="zmiana_hasla.php">Zmiana Hasła</a>
    <a class="userPanel--button" href="edytuj_dane.php">Edytuj Dane</a>
    <a class="userPanel--button" href="/projektArianOrwat4D/wyloguj.php">Wyloguj</a>
    <h2>Twoje zamówienia</h2>
    <table>
        <tr>
            <th>Nazwa</th>
            <th>Cena</th>
            <th>Anulacja</th>
        </tr>
    <?php

        $data = Order::getOrders($_SESSION['logged']);

        foreach ($data as $order) {
            echo "<tr>";
            echo "<td>".$order['diet_name']."</td>";
            echo "<td>".$order['diet_price']."</td>";
            echo "<td><a href='usun_zamowienie.php?id=".$order['order_id']."'>Anuluj zamówienie</a></td>";
        }

    ?>
    </table>
</section>

<?php

@include_once(__DIR__.'/../modules/end.php');


?>