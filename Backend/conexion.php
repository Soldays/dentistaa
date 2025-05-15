<?php
$servername = "23.21.179.90";
$username = "username";
$password = "password";
$bdname = "users";
 
$conn = new mysqli($servername, $username, $password, $bdname);
 
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
    
 
?>
