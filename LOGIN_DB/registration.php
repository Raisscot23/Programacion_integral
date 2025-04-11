<?php
    include('config.php');
    session_start();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password,PASSWORD_BCRYPT);

        $query = $connection->prepare("SELECT * FROM usuarios WHERE EMAIL=email");
        $query-> bindPARAM("email", $email, PDO::PARAM_STR);
        $query-> execute();

        if(query->rowCount() > 0){
            echo '<p class="error"> El Correro Ya Existe! </p>';            
        }

        if($query->rowCount() == 0){
            $query = $connection -> prepare("INSERT INTO usuarios(USERNAME,PASSWORD,EMAIL) VALUES (:username, :password_hash, :email)");
            $query-> bindPARAM("username", $username, PDO::PARAM_STR);
            $query-> bindPARAM("password_hash", $password_hash, PDO::PARAM_STR);
            $query-> bindPARAM("email", $email, PDO::PARAM_STR);
            $result = $query->execure();

            if($result){
                echo '<p class="error"> Se registro correctamente! </p>';       
            }else{
                echo '<p class="error"> Algo salio mal </p>';   
            }
        }
    }
?>