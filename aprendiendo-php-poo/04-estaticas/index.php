<?php

require_once 'configuracion.php';

Configuracion::setColor("Azul");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color . '</br>';
echo Configuracion::$entorno . '</br>';
echo Configuracion::$newsletter . '</br>';