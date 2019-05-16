<?php
require_once 'Usuario.php';
require_once 'funciones-genericas.php';

class Cliente extends Usuario{
    
    use Helper;
    private $tipoCuenta; 
    public function __construct($nombre) {
        parent::__construct($nombre);
        
        $this->tipoCuenta = "corriente";
    }
    public function getNombre(){
        echo "Nombre de la funcion";
    }
}
//siempre hay que invocar los metodos abstractos del padre en el hijo (getNombre())
?>

