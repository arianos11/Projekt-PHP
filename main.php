<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $sql = $GLOBALS['db']->query("SELECT * FROM users");
    while($elements = $sql->fetch_assoc()) {
        foreach($elements as $name => $ele) {
            echo "<p>$name : $ele</p>";
        }
    }
?>

</body>
</html>