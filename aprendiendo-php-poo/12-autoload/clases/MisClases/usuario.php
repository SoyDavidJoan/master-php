<?php

namespace MisClases;



class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = 'David Joan';
        $this->email = 'contacto@davidjoan.com';
    }
}
