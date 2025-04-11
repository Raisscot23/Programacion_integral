<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>
<body>
    <form action="registration.php" method="post">
        <div class="form-element">
            <label for="">Usuario</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-element">
            <label for="">Correo</label>
            <input type="text" name="email" required>

        <div class="form-element">
            <label for="">Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" name="register">Enviar</button>
    </form>
</body>
</html>