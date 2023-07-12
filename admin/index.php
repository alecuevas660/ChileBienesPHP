<?php
session_start();
$auth = $_SESSION['login']; //login = True inicio de sesión ha ocurrido
//Si es que el usuario está autenticado
if (!$auth){
    header('Location: /ChileBienes/index.php');
} 

    // Importar la conexión
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el Query
    $query = "SELECT * FROM propiedades";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);

//mostrar mensaje de exito
$resultado = $_GET['resultado'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if($id){

        //eliminar archivos
        $query = "SELECT imagen FROM propiedades WHERE id = {$id}";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/'.$propiedad['imagen']);


        //eliminar la propiedad
        $query = "DELETE FROM propiedades WHERE id = {$id}";
        $resultado=mysqli_query($db, $query);
        if($resultado){
            header('Location: /ChileBienes/admin');
        }
    }
}
require '../includes/funciones.php';

incluirTemplate('header');


?>

<style>
img{
    margin:0 auto;
}
.propiedades{
    margin: 0 auto;
    width: 100%;
    border-spacing: 0;
    text-align: center;
    border: black 2px solid;
    background-color: greenyellow;
}
td,th{
    border: black 1px solid;
    padding: 2rem;
}

.modificar{
        width:100px;
        border-radius: 10px;
        padding: 10px 20px;
        color:white;
        font-weight: 700;
        background-color: green;
        text-decoration: none;
        display: block;
        margin: 0 auto;
      }
      .modificar:hover{
        color:white;
      }
.eliminar{
        width:100px;
        border-radius: 10px;
        padding: 10px 20px;
        color:white;
        font-weight: 700;
        background-color:red;
        text-decoration: none;
        display: block;
        margin: 0 auto;
      }
.eliminar:hover{
        color:white;
      }

.wh-100{
    width: 100%;
}
    




</style>
<main class="contenedor seccion">
<a style="margin-bottom:20px;"href="/ChileBienes/admin/propiedades/crear.php" class="boton boton-contacto">  Crear propiedad &rarr;</a> 
<?php if( intval( $resultado ) === 1): ?>
        <p style="text-align: center; color: white; padding:3rem;font-weight:bold;text-transform: uppercase;margin: 1rem 0;background-color:greenyellow;">Hecho correctamente</p>
        <?php endif; ?>
<table class="propiedades">
    <thead>
        <tr>       
            <th>Id</th>
            <th>Titulo</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody class="body">
        <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
    <tr>
        <td> <?php echo $propiedad['id']; ?> </td>
        <td> <?php echo $propiedad['titulo'];?> </td>
        <td> <?php echo $propiedad['precio'];?> </td>
        <td> <img style="width:150px;" src="/CHILEBIENES/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"> </td>
        <td>
            <a class="modificar" href="/ChileBienes/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>">Actualizar</a>

            <form class="wh-100" method="POST">
            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">  
            <input type="submit" value="eliminar"style="margin-top:10px;" class="eliminar" >
            </form>
        </td>
    </tr>
       <?php endwhile; ?>
    </tbody>
</table>
</main>

<?php
    incluirTemplate('footer');
?>
