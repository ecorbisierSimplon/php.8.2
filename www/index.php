<?php
// $host = 'db:3306'; //Nom donné dans le docker-compose.yml
// $user = 'admin';
// $password = 'myP@ssw0rd';
// $db = 'tranquillo';

// $conn = new mysqli($host,$user,$password,$db);
// if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
// else{
//         echo "Connexion à MSSQL ok<br />";
//         mysqli_close($conn);
// }

echo "Testing a PHP Apache Docker Container";

$host = 'db';
$user = 'admin';
$pass = 'myP@ssw0rd';
$db = 'tranquillo';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully";

$conn->close();