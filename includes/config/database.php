<?php
function conectarDB() : mysqli{
    $server= "localhost";
    $user="alexis";
    $password="213249819";
    $db = "ale_bienecesraices";

    $conexion = new mysqli($server,$user, $password, $db);

    if ($conexion->connect_errno){
        die ("Error al conectar a la base de datos: " . $conexion->connect_error);
    }else{
        return $conexion;
    }

}
