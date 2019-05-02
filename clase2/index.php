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
    <body style="<?php if(isset($_COOKIE["fondo"])){
        echo "background: ".$_COOKIE["fondo"].";";
        echo "color:white";
    } ?>">
        <?php
        if(isset($_SESSION["usuario"])){
            header("location:login.php");
        }
        include 'libreria.php';
        include_once 'namespace.php';
        use Libreria as L;
        use function Funciones\sumar;
        ?>

        <h1 style="color:red">Todo marcha bien</h1>
        <a href="cerrarsesion.php">cerrar</a>
        <p>suma del spacename Libreria:</p>
        <?php
        echo L\sumar(1,2);
        ?>
        <p>constante del spacename libreria: </p>
        <?php  echo L\NUMERO ?>
        <p>suma del spacename Funciones:</p>
        <?php
        echo sumar();
        ?>
        </br>
        </br>
        <form method="post" action="setcookie.php">
            <label for="color-blanco">
            <input id="color-blanco" name="color" type="radio" value="blanco">Blanco
            </label>
            </br>
            </br>
            <label for="color-oscuro">
            <input id="color-oscuro" name="color" type="radio" value="oscuro">Oscuro
            </label>
            </br>
            </br>
            <input type="submit" value="Envialo" name="Enviar">
        </form>
        
    </body>
</html>
