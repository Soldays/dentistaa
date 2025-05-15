<?php
// Conexión a la base de datos

include 'conexion.php';

// Variable para cargar datos de edición
$editData = null;


// Agregar o actualizar usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? '';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';
    $tel = $_POST['tel'];
    $imagen = '';

    if (!empty($_FILES['picsure']['name'])) {
        $imagen = basename($_FILES['picsure']['name']);
        $ruta = "backend/uploads/" . $imagen;
        move_uploaded_file($_FILES['picsure']['tmp_name'], $ruta);
    }

    if ($id) {
        $sql = "UPDATE users SET username='$username', email='$email', tel='$tel'";
        if ($imagen) $sql .= ", picsure='$imagen'";
        $sql .= " WHERE id=$id";
    } else {
        $sql = "INSERT INTO users (username, email, password, tel, picsure) VALUES ('$username', '$email', '$password', '$tel', '$imagen')";
    }

    if (!$conn->query($sql)) echo "Error: " . $conn->error;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Eliminar usuario
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $res = $conn->query("SELECT picsure FROM users WHERE id = $id");
    if ($res && $row = $res->fetch_assoc()) {
        if ($row['picsure'] && file_exists("uploads/" . $row['picsure'])) {
            unlink("uploads/" . $row['picsure']);
        }
    }
    $conn->query("DELETE FROM users WHERE id = $id");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Cargar datos si se va a editar
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM users WHERE id = $id");
    $editData = $res->fetch_assoc();
}
?>

