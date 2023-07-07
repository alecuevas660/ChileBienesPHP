<?php
//db
require 'includes/config/database.php';
$db = conectarDB();

$errores = [];

//autenticar usuario usuario
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $email =mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password= mysqli_real_escape_string($db,$_POST['password']);
    if(!$email){
        $errores[] = "El email es obligatorio o no es válido";
    
    }
    if(!$password){
        $errores[] = "La contraseña es obligatoria";
        
    }

    if(empty($errores)){
        $query= "SELECT * FROM usuarios WHERE email = '${email}'  ";
        $resultado= mysqli_query($db,$query);
        if($resultado->num_rows){
            
        }else{
            $errores[] = "El usuario no existe";
        }
    }
}

//incluye header
require 'includes/funciones.php';
incluirTemplate('loginheader');
?>


<!--- Estilos del formulario --->
<style>
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: lightgray;
    background: url("src/img/fondologin.jpg") no-repeat;
    background-position: center;
}

form{
    color:white;
}

form a{
    text-decoration: none;
    color: white;
}



.formulario{
    margin: 0 auto;
    background: rgb(40,37,101);
    background: linear-gradient(90deg, rgba(40,37,101,1) 4%, rgba(89,89,194,1) 43%, rgba(66,78,80,1) 99%);
    border-radius: 10px;
    padding: 30px 40px;
}

.formulario .input-box{
    width: 100%;
    height: 60px;
    background:lightblue;
    margin: 30px 0;
}

.input-box input{
    width: 100%;
    height: 100%;
    background:transparent;
    border: none;
    outline: none;
    border: 2px solid rgb(255, 255, 255);
    border-radius: 40px;
    padding: 20px 45px 20px 20px;
}

input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.formulario .btn{
    width: 100%;
    height: 45px;
    background:#fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow:0 0 10px rgba(0, 0, 0, .1);
    cursor:pointer;
    font-weight: 600;
}
.formulario .register-link{
    text-align: center;
    display: block;
}

.register-link a{
    display: block;
}
.register-link a:hover{
    color: rgb(32, 18, 76 );
}
.btn:hover{
    background: rgb(2,1,17);
    background: linear-gradient(90deg, rgba(2,1,17,1) 0%, rgba(59,59,210,1) 44%, rgba(0,0,0,1) 99%);    
    color:#fff;
}

@media (min-width: 768px) {
    .formulario{
        width: 500px;
    }
}

</style>

<main class="contenedor seccion">
    <div class="formulario">
        <form method="POST" novalidate >
        <a href="/ChileBienes/index.php" class="boton">&larr; Volver </a>
            <h1>Login</h1>
            <div class="input-box">
                <input name="email" type="email" placeholder="Ingresa E-mail" required>
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="Ingresa contraseña" required>
            </div>
            
            <button type="submit" class="btn">Login</button>
            <div style="font-size:16px;" class="register-link">
                
                <p style="color:white; font-size:20px;">¿No tienes cuenta?</p>
                <a href="#">Registrarse</a>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</main>

