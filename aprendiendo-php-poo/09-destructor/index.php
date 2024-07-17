<?php

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "David Joan";
        $this->email = "contacto@davidjoan.com";
        echo "Instancia creada <br/>"; //Nota importante. No se deben imprimir cosas desde el contructor. Es unicamente para fines didacticos
    }
   
    public function __toString(){
        return "Hola, {$this->nombre} esta registrado con {$this->email}";
    }
    
    public function __destruct() {
        echo "<br/>Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
echo $usuario->email;


