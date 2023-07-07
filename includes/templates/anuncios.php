<?php
 // Importar la conexión
 require __DIR__ . '/../config/database.php';
 $db = conectarDB();
// Escribir el Query
$query = "SELECT * FROM propiedades LIMIT {$limite}";

// Consultar la BD 
$resultado = mysqli_query($db, $query);
?>
<div class="contenedor-anuncios">
<?php while( $propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">
                    <img loading="lazy"  src="/CHILEBIENES/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio 1">               
       
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo']; ?></h3>
                    <p style="font-size: 16px;"> <?php echo $propiedad['descripcion']; ?></p>
                    <p class="precio"><?php echo $propiedad['precio']; ?></p>

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
                    <a href="anuncio.php?id=<?php echo $propiedad['id'] ?>" class="boton boton-amarillo">Ver anuncio</a>
                </div>
            </div>
<?php endwhile; ?>
</div>
