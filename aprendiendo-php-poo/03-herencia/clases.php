<?php

// HERENCIA: La posibilidad de compartir atributos y metodos entre clases

class Persona {

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }

    public function hablar() {
        return "Estoy hablando";
    }

    public function caminar() {
        return "Esto caminando";
    }
}

class Informatico extends Persona {

    public $lenguajes;
    public $experienciaProgramacion;

    public function __construct() {
        $this->lenguajes = "HTML, CSS y JS";
        $this->experienciaProgramacion = 10;
    }

    public function sabeLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programar() {
        return "Soy programador";
    }

    public function reparartOrdenador() {
        return "Reparar ordenadores";
    }

    public function hacerOfimatica() {
        return "Estoy escribiendo en word";
    }
}

class TecnicoRedes extends Informatico {

    public $auditarRedes;
    public $experienciaRedes;

    public function __construct() {
        parent::__construct();
        
        $this->auditarRedes = "Experto ALV";
        $this->experienciaRedes = 5;
    }
    public function auditoria() {
        return "Estoy auditanto una red";
    }
}
