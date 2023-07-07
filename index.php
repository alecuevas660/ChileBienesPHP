<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio=true);

?>
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

    <section class="seccion contenedor">
            <h2 style="margin-bottom: 60px;">Casas y depas a la venta</h2>
            <?php
            $limite=3;
            include 'includes/templates/anuncios.php'
            ?>

        <div class="alinear-todas">
            <a href="anuncios.html"class="boton-amarillo">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-contacto">Contacto</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <img loading="lazy" src="build/img/blog1.jpg">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span style="color:green;">29/04/2023 </span><span >por: </span><span style="color:green;">Ale</span> </p>
                    <p>
                        Consejos para que construyas una terraza con el mejor precio y materiales
                    </p>
                </a>
            </div>
            <a href="blog.html"class="boton-amarillo" style="color:#FFFF;">Ver todos</a>
        </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de excelente forma, totalmente rentable y confiable, con una muy buena manera de explicar las cosas
                </blockquote>
                <p>Alexis Cuevas</p>
            </div>
        
        </section>
    </div>
    <?php
    incluirTemplate('footer');
    ?>
    

    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>