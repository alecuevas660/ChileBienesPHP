<?php
//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

$consulta = "SELECT * FROM vendedor";
$resultado = mysqli_query($db, $consulta);
//Arreglo con mensaje de errores

$errores = [];






//acceder a los datos del formulario mediante post 
if($_SERVER['REQUEST_METHOD'] === 'POST'){

     
   
    $titulo = mysqli_real_escape_string($db,$_POST['titulo']);
    $precio = mysqli_real_escape_string($db,$_POST['precio']);
    $descripcion = mysqli_real_escape_string($db,$_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db,$_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db,$_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db,$_POST['estacionamiento']);
    $vendedor = mysqli_real_escape_string($db,$_POST['vendedor']);
    $imagen = $_FILES['imagen'];
    if(!$titulo){
        $errores[]= "Debes añadir un titulo";
    }
    if(!$precio){
        $errores[]= "Debes añadir un precio";
    }
    if(strlen($descripcion < 100) ){
        $errores[]= "Debes añadir una descripcion";
    }
    if(!$habitaciones){
        $errores[]= "Debes añadir las habitaciones";
    }
    if(!$wc){
        $errores[]= "Debes añadir los baños";
    }
    if(!$estacionamiento){
        $errores[]= "Debes añadir los estacionamientos";
    }
    if(!$vendedor){
        $errores[]= "Debes añadir un vendedor";
    }

    if(!$imagen['name'] || $imagen['error'] ) {
        $errores[] = 'La Imagen es Obligatoria';
    }

    // Validar por tamaño (1mb máximo)
    $medida = 1000 * 1000;


    if($imagen['size'] > $medida ) {
        $errores[] = 'La Imagen es muy pesada';
    }




    if(empty($errores)){
       
         //insertar datos en la bd




           /** SUBIDA DE ARCHIVOS */

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";


            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
 

        $query= " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId, imagen) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento','$vendedor','$nombreImagen')";
        $resultado = mysqli_query($db,$query);
        if ($resultado){
          header('Location: /ChileBienes/admin/index.php?resultado=1');
        }

    
    }
   

}
//declarar las variables globales para posterior uso en el form, de ese modo primero las establecimos para 
//posteriormente pasarlas por el condicional y realización de insert
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedor = '';
require '../../includes/funciones.php';
incluirTemplate('header');

?>



<main class="contenedor seccion">
<a href="/ChileBienes/admin/index.php" class="boton boton-contacto">&larr; Volver </a>

<h1>Administrador ChileBienes </h1>
<form class="formulario" method="POST" action="crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input  type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input  type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input 
                    type="number" 
                    id="habitaciones" 
                    name="habitaciones" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="habitaciones" >

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option  <?php echo $vendedor=== $vendedor['id_vendedor'] ? 'selected' : ''; ?>   value="<?php echo $vendedor['id_vendedor']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>                    
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-amarillo">

        </form>
        
</main>


<?php
    incluirTemplate('footer');
    ?>
