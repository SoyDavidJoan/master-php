<?php

class usuarioController{
    public function index(){
        echo "Controlador usuarios, Accion index";
    }
    
    public function registro(){
        require_once 'views/usuario/registro.php';
    }
}


