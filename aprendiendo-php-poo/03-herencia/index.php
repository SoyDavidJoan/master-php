<?php

require_once 'clases.php';

$personas = new Persona();

$personas->setNombre("David");

//var_dump($personas);

$informatico = new Informatico();

$informatico->setAltura(1.69);


$tecnicoRedes = new TecnicoRedes();

var_dump($tecnicoRedes);
