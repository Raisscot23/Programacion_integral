<?php
include 'conexion.php';

$id_cabina = $_POST['id_cabina'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$capacidad = $_POST['capacidad'];

$sql = "INSERT INTO cabinas (id_cabina, nombre, ubicacion, capacidad) VALUES ('$id_cabina', '$nombre', '$ubicacion', '$capacidad')";

if ($conn->query($sql) === TRUE) {
    echo "Cabina registrada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>