<?php

class UsuarioController{
    public function mostrarTodos(){
        require_once 'models/Usuario.php';
        
        $usuario = new Usuario();
        
        $todos_los_usuarios = $usuario->conseguirTodos('Usuarios');
        
        
        require_once 'views/Usuarios/Mostrar-todos.php';
    }
    
    public function crear(){
        require_once 'views/Usuarios/Crear.php';
    }
}