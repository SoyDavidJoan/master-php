<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    private $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function encender() {
        return "Lo que sea";
    }
    
    public function apagar() {
        return "Lo que sea";
    }
    
    public function reiniciar() {
        return "Lo que sea";
    }
    
    public function desfragmentar() {
        return "Lo que sea";
    }
    
    public function detectarUSB() {
        return "Lo que sea";
    }
}

$maquintosh = new iMac();

$maquintosh->setModelo('Macbook Pro 2024');
echo $maquintosh->getModelo();