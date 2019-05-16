<?php

abstract class Usuario {
    
    protected $nombre;
    protected $contrasena;
    
    public function __construct($nombre) {
       
        $this->nombre = $nombre; 
    }
    
    public abstract function getNombre();
    
    public function login(){
        echo "Inicio sesion exitosamente!";
    }
    
    public function logout(){
        echo "Cerro sesion exitosamente!";
    }
}

