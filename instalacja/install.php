<?php
$mysqli = new mysqli("localhost","root","");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$mysqli->query('CREATE DATABASE projektArianOrwat4D');

$mysqli = new mysqli("localhost","root","","projektArianOrwat4D");

// $query = file_get_contents("../sql/createUsers.sql");

// $mysqli->query($query);

// $query = file_get_contents("../sql/createAdmins.sql");

// $mysqli->query($query);

// $query = file_get_contents("../sql/createOrders.sql");

// $mysqli->query($query);

function sqlReadAndExecute($file, $mysqli) {
    // Temporary variable, used to store current query
    $templine = '';
    // Read in entire file
    $lines = file($file);
    // Loop through each line
    foreach ($lines as $line)
    {
        // Skip it if it's a comment
        if (substr($line, 0, 2) == '--' || $line == '')
            continue;

        // Add this line to the current segment
        $templine .= $line;
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';')
        {
            // Perform the query
            $mysqli->query($templine);

            $templine = '';
        }

    }
}

sqlReadAndExecute("../sql/createTables.sql", $mysqli);

if(isset($_POST['defult'])) {
    sqlReadAndExecute("../sql/defaultData.sql", $mysqli);
}

function generateRandomString($length = 14) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$options = [
    'cost' => 12
];

$passwordString = generateRandomString();

$password = password_hash($passwordString, PASSWORD_BCRYPT, $options);

$mysqli->query('INSERT INTO admins (admin_first_name, admin_last_name, admin_email, admin_password) 
VALUES ("admin","admin","admin@yourdomain.pl","'.$password.'")');

echo "<p>Installation completed</p><br/>";
echo "<p>Default login: admin@yourdomain.pl</p><br/>";
echo "<p>Defaul password: $passwordString</p><br/>";

?>