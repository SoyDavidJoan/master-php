<?php

function Autoload($classname){
    include 'controllers/'.$classname.'.php';
}

spl_autoload_register('Autoload');
