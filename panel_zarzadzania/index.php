<?php

@include_once(__DIR__.'/../modules/start.php');

@include_once(__DIR__.'/../classes/Order.php');

?>

<section>
    <h1>Panel zarządzania</h1>
    <a href="zmiana_hasla.php">Zmiana Hasła</a>
    <a href="edytuj_dane.php">Edytuj Dane</a>
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