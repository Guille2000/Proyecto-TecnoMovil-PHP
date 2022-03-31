<?php  
    require '../../includes/config/database.php';
    include '../../includes/config/header.php';


    $db = conectarDB();

    $errores = [];


    $titulo = '';
    $precio = '';
    $descripcion = '';
    $modelo = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $modelo = mysqli_real_escape_string($db, $_POST['modelo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

        $imagen = $_FILES['imagen'];


        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }
        if(!$modelo){
            $errores[] = "Debes añadir un modelo";
        }
        if(!$precio){
            $errores[] = "Debes añadir un precio";
        }
        if(!$descripcion){
            $errores[] = "Debes añadir una descripcion";
        }
        if(!$imagen['name']){
            $errores[] = "Debes añadir una imagen";
        }
       

        // Validar por tamaño (1mb máximo)

        $medida = 1000 * 1000;
         if($imagen['size'] > $medida ){
             $errores[] = 'Imagen muy pesada';
         }



        if(empty($errores)){

            //crear carpeta de img
            $carpetaImagenes = "../../imagenes";
            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }
            //generar nombre unico

            $nombreImagen = md5( uniqid(rand(), true ) );
            //subir image
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" . $nombreImagen . ".jpg");
            

            $query = "INSERT INTO descripcion (titulo, modelo, precio, descripcion, imagen)
            VALUES ('$titulo', '$modelo', '$precio', '$descripcion', '$nombreImagen')";

        
            $resultado = mysqli_query($db, $query);

            if($resultado){
                
                header('Location: /admin?resultado=1');

            }
       
        }

    }
?>
    <main class="contenedor">

        <h1 class="text-center">Crear</h1>
        <a href="/admin/" class="formulario__btn">Volver</a>

        <?php foreach ($errores as $error) : ?> 

            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form action="/admin/propiedades/crear.php" method="POST" class="formulario" enctype="multipart/form-data">
            <fieldset>
                <Legend>Información</Legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" placeholder="Celular que desea ingresar">

                <label for="Modelo">Modelo</label>
                <input type="text" id="Modelo" name ="modelo" value="<?php echo $modelo; ?>" placeholder="Especificaciones (ram, modelo)">

                <label for="Precio">Precio</label>
                <input type="number" id="precio" name="precio" value="<?php echo $precio; ?>" placeholder="Precio celular">

                <label for="Imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="Descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>
            <input type="submit" value="Enviar pedido" class="formulario__btn">
        </form>


    </main>
<?php 
    include '../../includes/config/footer.php';
?>