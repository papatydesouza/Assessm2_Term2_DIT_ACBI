<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lucasloaves";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifing conection
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "LUCAS LOAVES";
?>
