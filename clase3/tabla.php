<?php
namespace Clases;
class Tabla{
    public $alto;
    public $ancho;
    private $border;
    private $bgcolor;
    const ATRIB="5";

    public function __construct() {
        $this->border =1;
        $this->bgcolor="#ff0000";
    }
    public function getBgcolor(){
        return $this->bgcolor;
    }

    public function setBgcolor($bgcolor){
        $this->bgcolor= $bgcolor;
    }

    public function getBorder(){
        return $this->border;
    }
    public function setBorder($border){
        $this->border= $border;
    }

    public function imprimirCabecera(){
        echo "<table border='".$this->border."' bgcolor='".$this->bgcolor."'";
        
    }
    public static function imprimirFilas($cant_filas=5) {
        
        for ($i=0;$i<$cant_filas;$i++){
            echo "<tr>";
            echo "<td>".self::ATRIB."</td>";
            echo "<td></td>";
            echo "</tr>";
        }
        
    }
}



?>
/*hola probando*/

