<!DOCTYPE html>
<html>
<head>
    <title>Registrate</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/crud.css">

    <link rel="shortcut icon" href="img/logo.jpg">
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
                    <a href="catalogo.html" class="nav-item nav-link">Catálogo</a>
                    <a href="artesanos.html" class="nav-item nav-link">Artesanos</a>
                    <a href="eventos.html" class="nav-item nav-link">Eventos</a>
                    <a href="testimonial.html" class="nav-item nav-link">Testimonios</a>
                    <a href="contact.html" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>


    <!-- Page Header  -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Registrate con nosotros</h1>
        </div>
    </div>


    <h2>Registrate para unirte con nosotros</h2>
    <form action="agregar.php" method="post" enctype="multipart/form-data">
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Tu Producto: <input type="text" name="producto" required><br>
        <input type="submit" value="Agregar Artesano">
    </form>


    <h1>Lista de Usuarios</h1>
    <table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Producto</th>
        <th>Acciones</th>
    </tr>
    <?php
    include 'conexion.php';
    $sql = "SELECT * FROM artesanos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["apellido"] . "</td>";
            echo "<td>" . $row["producto"] . "</td>";
            
            echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay artesanos</td></tr>";
    }
    $conn->close();
    ?>
</table>


<!-- Footer -->
    <footer>
        <div id="redes">
            <ul>
                <li><a href="https://www.facebook.com/politecapop"><img src="img/icons (1).png" alt=""></a></li>
                <li><a href="https://www.instagram.com/politecapop/"><img src="img/icons (1).webp" alt=""></a></li>
            </ul>
        </div>
        <div id="disclaimer">
            <h4>© 2025 Politeca Pop. Todos los derechos reservados.</h4>
            <a id="autor" href="autor.html"> <h4>Sitio Web Realizado por:</h4></a>
            <h4>Las obras de arte exhibidas en este sitio web son propiedad de sus respectivos artistas y están
                protegidas por derechos de autor.
                Los nombres y logotipos de Rose Field Gallery son marcas registradas de nuestra empresa.
                "Artista" y "Obra de arte" son marcas registradas de los artistas individuales.</h4>
            <h4>Todas las demás marcas comerciales y nombres de productos mencionados son propiedad de sus respectivos
            dueños.</h4>
            <h4>Se prohíbe la reproducción, distribución o modificación de las obras de arte sin autorización expresa.
                Gracias por su visita a nuestra galería virtual.</h4>
        </div>
        <div id="avisos">
            <ul>
                <li>Aviso de Cookies</li>
                <li>Términos de uso</li>
                <li>Aviso de privacidad</li>
                <li>Ayuda</li>
                <li>Política sobre uso de materiales</li>
                <li>Declaración de afilación</li>
                <li>Directrices para transmisiones</li>
                <li>Update notes</li>
                <li>Licencias de plugins</li>
            </ul>
        </div>
    </footer>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>