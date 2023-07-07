<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio=true);

?>
        <main class="contenedor seccion contenido-centrado">
            <h1>Nuestro blog</h1>
            <div class="contenido-blog">
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
                </article>
                <article class="entrada-blog">
                    <div class="imagen">
                        <img loading="lazy" src="build/img/blog2.jpg">
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Construye una alberca en tu hogar</h4>
                            <p>Escrito el: <span style="color:green;">29/04/2023 </span><span >por: </span><span style="color:green;">Ale</span> </p>
                            <p>
                                Consejos para que construyas una terraza con el mejor precio y materiales
                            </p>
                        </a>
                    </div>
                </article>
                <article class="entrada-blog">
                    <div class="imagen">
                        <img loading="lazy" src="build/img/blog3.jpg">
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Guia para la decoración de tu casa</h4>
                            <p>Escrito el: <span style="color:green;">29/04/2023 </span><span >por: </span><span style="color:green;">Ale</span> </p>
                            <p>
                                Consejos para que construyas una terraza con el mejor precio y materiales
                            </p>
                        </a>
                    </div>
                </article>
                <article class="entrada-blog">
                    <div class="imagen">
                        <img loading="lazy" src="build/img/blog4.jpg">
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Guia para la decoración de tu habitación</h4>
                            <p>Escrito el: <span style="color:green;">29/04/2023 </span><span >por: </span><span style="color:green;">Ale</span> </p>
                            <p>
                                Consejos para que construyas una terraza con el mejor precio y materiales
                            </p>
                        </a>
                    </div>
                </article>
            </div>
        </main>
    
        <?php
    incluirTemplate('footer');
    ?>

    

    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>