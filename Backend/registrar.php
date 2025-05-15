<?php

 include 'conexion.php'; 
//crear registros 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $tel = $_POST['tel'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash para mayor seguridad

    // Insertar usuario en la base de datos
    $stmt = $conn->prepare("INSERT INTO users (email, username, tel ,password  ) VALUES (?, ?, ? ,?)");
    $stmt->bind_param("ssis", $email, $username,  $tel ,$password );

    if ($stmt->execute()) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        echo "Error al registrar usuario.";
    }

    $stmt->close();
    $conn->close();
}



?>
