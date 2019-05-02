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
        <pre><?php
        //var_dump($_FILES); 
        print_r($_FILES);
        print_r($_POST);
        if(isset($_POST["Enviar"])){
            if(is_uploaded_file($_FILES["fotos"]["tmp_name"])){
                //para quedarme con el nombre del archivo tal como lo envian
                $nombre_file=$_FILES["fotos"]["name"];
                //ruta donde quiero que se guarde
                $ruta = "publica/";
                copy($_FILES["fotos"]["tmp_name"], $nombre_file);
                echo $nombre_file;  
            }
        }
        echo "la zona horaria por defecto es:".  date_default_timezone_get();
        echo "<br>";
        date_default_timezone_set("America/Caracas");
        echo "la zona horaria ahora es: ".  date_default_timezone_get();
                
        
        echo "<br>";
        echo "Hoy es ".date("d/m/Y h:n:s")."<br>";
        
        //phpinfo();
        ?></pre>
        
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label>Nombre: </label>
            <!-- <input type="text" name="nombre" value=" <?php echo isset($_POST["nombre"]) ? $_POST["nombre"] : "" ?>" /> -->
            <input type="text" name="nombre" value=" <?= $_POST["nombre"] ?? "" ?>" />
            <br>
            <input type="file" name="fotos">
            <br>
            <input type="submit" value="Enviar" name="Enviar">

            
        </form>
        <label></label>
        
    </body>
</html>
