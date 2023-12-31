<?php
    if(!isset($_SESSION)) { //SI no esta vacia la sesión, esta comienza, si esta vacia, no.
        session_start();
    }

    $auth = $_SESSION['login'] ?? false; //Pregunta si es false
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChileBienes</title>
    <link rel="stylesheet" href="/CHILEBIENES/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a style="margin:0;" href="index.php">
                    <h1>ChileBienes</h1>
                </a>
                <div class="mobile-menu">
                    <img src="/CHILEBIENES/build/img/barras.svg" alt="icono-menu">
                </div> 
                <div class="derecha">
                    <nav class="navegacion">
                        <a href="nosotros.php">
                                Nosotros
                        </a>
                        <a href="anuncios.php">
                                Anuncios 
                        </a>
                        <a href="blog.php">
                                Blog
                        </a>
                        <a href="contacto.php">
                                Contacto
                        </a>
                        <?php if($auth): ?> <!---Pregunta si es True la sesión, si la es ocurre esto---->
                            <a href="cerrar-sesion.php">Cerrar Sesión</a>
                        <?php endif; ?>
                        <img class="dark-mode-boton" src="/CHILEBIENES/build/img/dark-mode.svg" alt="dark-mode">
                    </nav>
                </div>
            </div>

            </div>
    </header>
<body>
</html>