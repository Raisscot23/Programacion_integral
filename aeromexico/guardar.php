<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "aeromexico"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$cliente = $_POST['cliente'];
$boleto = $_POST['boleto'];
$destino = $_POST['destino'];

$sql = "INSERT INTO boletos (cliente, boleto, destino) VALUES ('$cliente', '$boleto', '$destino')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>