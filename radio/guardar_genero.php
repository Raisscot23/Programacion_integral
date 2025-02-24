<?php
include 'conexion.php';

$id_genero = $_POST['id_genero'];
$nombre_genero = $_POST['nombre_genero'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO generos_musicales (id_genero, nombre_genero, descripcion) VALUES ('$id_genero', '$nombre_genero', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Genero musical registrado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>