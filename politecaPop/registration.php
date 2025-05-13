<?php
include('conexion.php');
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE EMAIL = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<p class="error"> ¡El correo ya existe! </p>';
    } else {
        $stmt = $conn->prepare("INSERT INTO usuarios (USERNAME, PASSWORD, EMAIL) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password_hash, $email);
        if ($stmt->execute()) {
            echo '<p class="success"> ¡Se registró correctamente! </p>';
        } else {
            echo '<p class="error"> Algo salió mal al registrar. </p>';
        }
    }
}
?>
