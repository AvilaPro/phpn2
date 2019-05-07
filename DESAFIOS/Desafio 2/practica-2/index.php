<?php 
// nunca olviden esta funcion para poder hacer uso de la variable $_SESSION
session_start();

    // verificamos la sesion, si no existe redirigimos al login.php
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
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
        <title>Home</title>
    </head>
    <body>
        
      <!--  verificamos si existe una sesion para mostrar un titulo de Bienvenido nombreusuario -->
    <h1><?php echo isset($_SESSION["usuario"]) ? "Bienvenido ".$_SESSION["usuario"] : "" ?></h1>
        
       <p>todas las paginas que quieran acceder solo si esta logueado deben verificar si tiene una sesion iniciada al inicio</p>
       <p>si desea aprender mas intenta guardar la sesion en una cookie para que al cerrar el navegador y volverlo abrir no se haya terminado la sesion!</p>
       <p>Nota: esto no es parte del desafio.</p>
       <p>si desea indagar un poco mas acerca de otras funciones que manipulen sesiones <a target="_blank" href="https://www.php.net/manual/es/ref.session.php">vaya a este enlace!</a></p>

       <a href="logout.php">Cerrar sesion</a>
    </body>
</html>
