<?php
//Programacion Orientaa a Objetos en PHP (POO)

//Definir una clase (Molde para crear mas objetos de itpo coche con cartacteristicas parecidas)

class Coche{
    //Atributos o propiedades (variables)
    
    // PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual, de clases quie hereden o fuera de la clase
    public $color;
    
    // PROTECTED: Podemos acceder desde la calse que los define y desde clases que hereden la clase
    protected $modelo;
    
    // PRIVATE: Unicamente se puede acceder desde esta clase
    private $marca;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
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
    
    public function mostrarInformacion(Coche $miObjeto){
        if (is_object($miObjeto)) {
            $informacion = "<h1>Información del coche</h1>";
            $informacion .= "<br>Color: " . $miObjeto->color;
            $informacion .= "<br>Modelo: " . $miObjeto->modelo;
            $informacion .= "<br>Velocidad: " . $miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miObjeto";
        }
        
    return $informacion;
    }
}
