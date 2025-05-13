<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM artesanos WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $producto = $_POST['producto'];
    $id = $_POST['id'];

    $sql = "UPDATE artesanos SET nombre = '$nombre', apellido = '$apellido' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Artesanos</title>
</head>
<body>
    <h2>Editar Artesanos</h2>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        Apellido: <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required><br>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>