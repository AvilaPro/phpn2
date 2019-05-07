<?php 
session_start();

// verificamos si existe una sesion iniciada para redirigir al home(index.php)
    if(isset($_SESSION["usuario"])){
        header("location:index.php");
    }
    // verificamos si presiono el boton submit del formulario login
    if(isset($_POST["login"])){
        
        // asignamos los datos enviados por el formulario
        $usuario = $_POST["nombre"];
        $password = $_POST["password"];
        
        // validamos si las credenciales son correctas 
        if($usuario == "admin" && $password == "12345"){
           
            // iniciamos la sesion y redirigimos al home (index.php)
            $_SESSION["usuario"] = $usuario;
            header("location:index.php");
        }  else {
            
            $mensaje = "credenciales incorrectas!";
        }
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> <?= isset($mensaje) ? $mensaje : "" ?> </h1>
        <form action="login.php" method="POST">
            
            <input name="nombre" type="text" placeholder="nombre de usuario">
            <input name="password" type="password" placeholder="contraseña">
            
            <input name="login" type="submit" value="iniciar sesion">
        </form>
    </body>
</html>
