<?php
require 'app.php';

function incluirTemplate ($nombres, $inicio = false) {
    include TEMPLATES_URL . "/{$nombres}.php";
}

function isAutenticado() : bool{
    session_start();
    $auth = $_SESSION['login']; //login = True inicio de sesión ha ocurrido
    if($auth){
        return true;

    }
    return false;
}