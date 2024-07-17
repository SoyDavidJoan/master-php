<?php

trait Utilidades{
    public function mostrarNombre(){
        echo '<h1>El nombre es '.$this->nombre.'</h1>';
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class Videojuegos{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Alondra Jocelyn";
$persona->mostrarNombre();

$Videjuego  = new Videojuegos();
$Videjuego->nombre = "La leyenda de Melda";
$Videjuego->mostrarNombre();

