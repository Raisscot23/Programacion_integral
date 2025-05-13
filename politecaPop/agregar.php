<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$producto = $_POST['producto'];

$sql = "INSERT INTO artesanos (nombre, apellido, producto) VALUES ('$nombre', '$apellido', '$producto')";

if ($conn->query($sql) === TRUE) {
    header("Location: crud.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
