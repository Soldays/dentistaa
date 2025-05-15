<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "users";

$conn = new mysqli($servername, $username, $password, $bdname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>