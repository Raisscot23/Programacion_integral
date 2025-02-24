<?php
include 'conexion.php';

$id_frecuencia = $_POST['id_frecuencia'];
$valor_frecuencia = $_POST['valor_frecuencia'];
$tipo_banda = $_POST['tipo_banda'];

$sql = "INSERT INTO frecuencias (id_frecuencia, valor_frecuencia, tipo_banda) VALUES ('$id_frecuencia', '$valor_frecuencia', '$tipo_banda')";

if ($conn->query($sql) === TRUE) {
    echo "Frecuencia registrada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>