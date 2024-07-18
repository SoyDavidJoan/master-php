<h1>Bienvenido a mi mundo</h1>

<?php
require_once 'Autoload.php';

if (isset($_GET['controller']) && class_exists($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'];
    $controlador = new $nombre_controlador();
    
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe";
    }
}else{
    echo "La pagina que buscas no existe";
}