<?php
session_start();
include 'conexion.php'; // Ajusta el path según tu estructura

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hash);
        $stmt->fetch();

        if (password_verify($password, $hash)) {
            $_SESSION['user_id'] = $id;
            $stmtUser = $conn->prepare("SELECT picsure FROM users WHERE id = ?");
            $stmtUser->bind_param("i", $id);
            $stmtUser->execute();
            $resultUser = $stmtUser->get_result();
            $userData = $resultUser->fetch_assoc();

            if (empty($userData['picsure'])) {
                $_SESSION['flash_message'] = [
                    'type' => 'danger',
                    'message' => 'Aún no tienes una foto de perfil. Por favor agrégala desde el Gestor de Usuarios.'
                ];
            }

            header("Location: ../index.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conn->close();
}
