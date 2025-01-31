<?php
    $conexion = new mysqli("localhost", "root", "", "aeromexico");
    if($conexion){
        echo "La gestión fue exitosa!";

    }else{
        echo "Hubo un fallo en la conexión";

    }
?>