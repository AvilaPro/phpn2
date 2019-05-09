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
        <h1>Clase 3</h1>
        <?php
        require "tabla.php";
        use Clases\Tabla as T;
        $tabla=new T;
        $tabla->ancho="100";
        $tabla->alto="1000";
        
        $tabla->setBorder(20);
        $tabla->setBgcolor("blue");

        ?>
        <table <?php $tabla->imprimirCabecera(); ?>>
            <thead>
                <tr>
                    <th>clases</th>
                    <th>metodos</th>
                </tr>
            </thead>
            <?php $tabla->imprimirFilas(5); ?>
        </table>
    </body>
</html>
