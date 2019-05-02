<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("location:index.php");
}

    if(isset($_POST["login"])){
        $usuario=$_POST["nombre"];
        $password=$_POST["password"];
        if($usuario=="admin" && $password=="1234"){
            $_SESSION["usuario"]=$usuario;
            header("location:index.php");
        }else{
            $mensaje="DATOS INCORRECTOS";
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
        <h1 style="color:red"><?= isset($mensaje) ? $mensaje : "" ?></h1>
        <form action="login.php" method="POST">
        <h1 style="color:green">Formulario</h1>
        </br>
        </br>
            <input name="nombre" type="text" placeholder="nombre de usuario">
            </br>
            </br>
            <input name="password" type="password" placeholder="contraseña">
            </br>
            </br>
            <input name="login" type="submit" value="iniciar_sesion">
        </form>
    </body>
</html>
