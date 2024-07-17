<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = 'Enrique Segoviano';
        $this->email = 'contacto@davidjoan.com';
    }
}
