<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if(!$id){
    header('Location: /ChileBienes');
}

require 'includes/config/database.php';
 $db = conectarDB();
// Escribir el Query
$query = "SELECT * FROM propiedades WHERE id = ${id}";

// Consultar la BD 
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);
require 'includes/funciones.php';
incluirTemplate('header', $inicio=false);

?>
        <main class="contenedor seccion contenido-centrado">
            <h1><?php echo $propiedad['titulo'];?></h1>
            <img loading="lazy" src="/CHILEBIENES/imagenes/<?php echo $propiedad['imagen']; ?>">
            <p style="margin-top:30px;font-weight:bold;">$50.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="build/img/icono_wc.svg" alt="iconowater">
                        <p><?php echo $propiedad['wc']; ?></p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                        <p><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio">
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>
                <p>
                <?php echo $propiedad['descripcion']; ?>
                </p>
        </main>
    


    <?php
    mysqli_close($db);
    incluirTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>