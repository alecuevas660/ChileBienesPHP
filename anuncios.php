<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio=false);

?>


<main class="contenedor seccion-anuncios">
    <h1>Casas y Depas en venta</h1>
    <?php
    $limite=10;
include 'includes/templates/anuncios.php'
    ?>
</main>
    
<?php
    incluirTemplate('footer');
    ?>
    

    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>