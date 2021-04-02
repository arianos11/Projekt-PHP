<?php

@include_once(__DIR__.'/../../adminModules/startAdmin.php');

@include_once(__DIR__.'/../../classes/Admin.php');

@include_once(__DIR__.'/../../classes/Diet.php');

Admin::checkAdmin($_SESSION['admin_logged']);

?>

<section class="mainAdmin">
    <h1>Diety</h1>
    <table>
        <tr>
           <th>Id</th> 
           <th>Nazwa</th> 
           <th>Cena</th> 
           <th>Zdjęcie</th> 
           <th>Opis</th>
           <th>Status</th>
           <th>Edytuj</th>
           <th>Usuń</th>
        </tr>
        <?php
            $diets = Diet::getAllDiets();
            foreach($diets as $diet) {
             
                echo "<tr>";
                echo "<td>".$diet['diet_id']."</td>";
                echo "<td>".$diet['diet_name']."</td>";
                echo "<td>".$diet['diet_price']."</td>";
                echo "<td>";
                echo $diet['diet_photo'] == '' ? 'Brak' : $diet['diet_photo'];
                echo "</td>";
                echo "<td>".$diet['diet_description']."</td>";
                echo "<td>".$diet['diet_status']."</td>";
                echo "<td><a href='edytuj.php?id=".$diet['diet_id']."'>Edytuj</a></td>";
                echo "<td><a href='usun.php?id=".$diet['diet_id']."'>Usuń</a></td>";
                echo "</tr>";

            }
        
        ?>
    </table>
    <br>
    <a href="dodaj.php">Dodaj nową</a>
</section>
 
<?php

@include_once(__DIR__.'/../../adminModules/end.php');


?>