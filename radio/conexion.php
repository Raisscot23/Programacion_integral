<?php
// conexion.php - Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "estacionradio";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>