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
        <style></style>
    </head>
    <body style="<?php if(isset($_COOKIE["fondo"])){
        echo "background: ".$_COOKIE["fondo"].";";
        echo "color:white";
    } ?>">
        <?php
        //print_r($_POST)
        if(isset($_POST["Enviar"])){
            if(isset($_POST["color"])){
                if($_POST["color"]=="oscuro"){
                    setcookie("fondo","#000000", time()+(60*5));
                    echo "Seleccionaste oscuro";
                }
                else{
                    echo "Solo Blanco es aburrido, selecciona algun otro XD";    
                }
            }
        } else{
            echo "Bienvenido";
        }
        
        ?>
    </body>
</html>
