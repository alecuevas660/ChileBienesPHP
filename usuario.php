<?php 
//Importar la conexión
require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y password
$email = "alecuevas660@gmail.com";
$password = "2123123";
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


//Query para crear usuario

$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}')";

//insertar
mysqli_query($db, $query);
?>