<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio=false);

?>
<seccion class="aboutus">
        <h3>Más sobre nosotros</h3>
        <div class="contenedor seccion-nosotros">
                <div class="img-nosotros">
                        <img loading="lazy" src="src/img/nosotros.jpg" alt="nosotros">
                </div>

                <div class="nosotros-descripcion">
                        <h3>Más de 25 años de experiencia</h3>
                        <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum asperiores vitae quibusdam quasi magnam, saepe voluptates, perspiciatis similique, alias id facilis doloribus quisquam est sit dolor. Officiis sunt eveniet numquam
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, est repellendus beatae esse mollitia ipsum veritatis nihil quisquam debitis nostrum unde quia maiores dolores perspiciatis in doloremque dolorum dignissimos dolore.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloremque ipsa modi? Magnam sed error non quae, impedit id ut culpa? Dignissimos maxime ipsa laborum reprehenderit, ea blanditiis maiores omnis?
                                
                      
                        </p>
                </div>
        </div>
</seccion>

<main class="contenedor seccion">
        <h1>Sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                    <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, at id vel rem tenetur laudantium sequi ea. Iure unde pariatur laudantium saepe beatae, asperiores voluptatem eum cum ipsa a consectetur.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, at id vel rem tenetur laudantium sequi ea. Iure unde pariatur laudantium saepe beatae, asperiores voluptatem eum cum ipsa a consectetur.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, at id vel rem tenetur laudantium sequi ea. Iure unde pariatur laudantium saepe beatae, asperiores voluptatem eum cum ipsa a consectetur.</p>
                </div>
        </div>
    </main>
        
    
    <?php
    incluirTemplate('footer');
    ?>
    

    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>