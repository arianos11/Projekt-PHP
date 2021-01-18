<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $GLOBALS['db']->open_query("SELECT * FROM dupa");
    $GLOBALS['db']->close_query();
?>

</body>
</html>