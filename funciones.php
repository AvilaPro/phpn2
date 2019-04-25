<?php 
$zona_horaria = date_default_timezone_get();
echo "<br>".$zona_horaria;
//date_default_timezone_set("America/Caracas");
function fecha(&$zona,$fecha=false){
    date_default_timezone_set("America/Caracas");
    $zona = date_default_timezone_get();
    if($fecha != false){
        return date('d \d\e m');

    }else{
        return "no paso parametro";
    }

}

echo "\n".fecha($zona_horaria,true);

echo "<br>";
echo "<br>".$zona_horaria;

//echo "\n".FECHA();
?>