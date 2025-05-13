<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fuentes tipograficas -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

    <link rel="shortcut icon" href="img/logo.jpg">
    <title>Login</title>
</head>
<body>
    <!-------------- Navbar  -------------->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">

            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">Politeca Pop</h1>
            </a>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="galeria.html" class="nav-item nav-link">Galería</a>
                    <a href="artesanos.html" class="nav-item nav-link">Artesanos</a>
                    <a href="eventos.html" class="nav-item nav-link">Eventos</a>
                    <a href="testimonial.html" class="nav-item nav-link">Testimonios</a>
                    <a href="contact.html" class="nav-item nav-link">Contacto</a>
                    <a href="register.php"><img src="img/user.png" class="perfil" alt=""></a>
                </div>
            </div>
        </nav>
    </div>


    <!-- Page Header  -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Registrate con tu cuenta</h1>
        </div>
    </div>


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