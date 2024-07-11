<?php
//Programacion Orientaa a Objetos en PHP (POO)

//Definir una clase (Molde para crear mas objetos de itpo coche con cartacteristicas parecidas)

class Coche{
    //Atributos o propiedades (variables)
    public $color = "Rojo";
    public $modelo = "Aventador";
    public $marca = "Ferari";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    // Metodos, son acciones que hace el objeto (antes funciones)
    
    public function getColor(){
        //Busca en esta clase la propiedad x
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar() {
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
}

//Crear un objeto / Instanciar la clase
$coche = new Coche();

//Usar los metodos

$coche->setColor("Amarillo");

echo "El color del coche es: " . $coche->getColor() . '<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: " . $coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);