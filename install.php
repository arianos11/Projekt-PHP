<?php
$mysqli = new mysqli("localhost","root","");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$mysqli->query('CREATE DATABASE projektphp');

$mysqli = new mysqli("localhost","root","","projektphp");

$query = file_get_contents("sql/create.sql");

$mysqli->query($query);

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

$mysqli->query('INSERT INTO users (user_first_name, user_last_name, user_email, user_password) 
VALUES ("admin","admin","admin@default.pl","'.$password.'")');

echo "<p>Installation completed</p><br/>";
echo "<p>Default login: admin@default.pl</p><br/>";
echo "<p>Defaul password: $passwordString</p><br/>";

?>