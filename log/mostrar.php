<?php
$host = "localhost";
$user = "root"; // Cambia si tienes otro usuario en phpMyAdmin
$pass = ""; // Cambia si tienes una contraseña en phpMyAdmin
$dbname = "usuraios";

$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>