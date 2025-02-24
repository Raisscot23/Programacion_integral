<?php
include 'conexion.php';

$id_locutor = $_POST['id_locutor'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$experiencia = $_POST['experiencia'];

$sql = "INSERT INTO locutores (id_locutor, nombre, apellido, experiencia) VALUES ('$id_locutor', '$nombre', '$apellido', '$experiencia')";

if ($conn->query($sql) === TRUE) {
    echo "Locutor registrado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>