<?php

require_once 'autoload.php';

//$usuario = new Usuario();
//echo $usuario->nombre;
//echo '<br/>';
//echo $usuario->email;
//
//$categoria = new Categoria();
//echo '<br>'.$categoria->nombre;
//Espaciosm de nombres y paquetes

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdminstrador;

class Principal {

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }

    function informacion(){
        echo __TRAIT__;
    }
}

$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);

$metodos = get_class_methods($principal);
$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);
//$usuario = new UsuarioAdminstrador();
//var_dump($usuario);
//Comprobar si una clase existe
//$clase = @class_exists('PanelAdministrador\Usario2');
//if ($clase) {
//    echo '<h1>La clase Existe</h1>';
//} else {
//    echo '<h1>La clase NO Existe</h1>';
//}