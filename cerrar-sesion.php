<?php
session_start();//inicia sesión
$_SESSION = []; //Sesión establecida sin ningún valor, por lo cual queda como un array vacio sin los datos de la sesión
//Y se cierra

header('Location: /ChileBienes/index.php')//Redirige a la raíz
?>