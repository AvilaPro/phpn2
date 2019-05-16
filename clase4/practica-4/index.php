<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HERENCIA</title>
    </head>
    <body>
        <?php
        include 'Cliente.php';
        
        $cliente = new Cliente("Darwist");
        
        
       
       echo $cliente->getNombre();
       
       echo "<br>";
       
       echo "suma: ".$cliente->sumar(34,6);
       
        ?>
    </body>
</html>
