<?php

require '../../includes/config/database.php';
$db = conectarDB();

//arreglo con mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

//ejecuta el codigo despues uqe el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['description'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];

    if (!$titulo) {
        $errores[] = "Debes añadir un Titulo";
    }
    if (!$precio) {
        $errores[] = "El Precio es Obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La Descripcion es Obligatoria y debe tener al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "La cantidad de Habitaciones es Obligatoria";
    }
    if (!$wc) {
        $errores[] = "La cantidad de Baños es Obligatoria";
    }
    if (!$estacionamiento) {
        $errores[] = "La cantidad de Estacionamientos es Obligatoria";
    }
    if (!$vendedorId) {
        $errores[] = "Debes seleccionar un Vendedor";
    }

    /*  echo "<pre>";
    var_dump($errores);
    echo "</pre>"; */

    //se revisa que el array de errores este vacio
    if (empty($errores)) {
        $query = "INSERT INTO propieadades (titulo,precio,descripcion,habitaciones,wc,
            estacionamiento,vendedorId) VALUES ('$titulo','$precio',
            '$descripcion','$habitaciones','$wc','$estacionamiento','$vendedorId' ); ";

        $resultado = mysqli_query($db, $query);
        if (!$resultado) {
            echo "Error, no se pudo ingresar correctamente los datos";
            exit;
        }
    }
}


require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>


    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo</label>
            <input 
                type="text" 
                id="titulo" 
                name="titulo" 
                placeholder="Titulo Propiedad" 
                value="<?php echo $titulo; ?>">

            <label for="precio">Precio</label>
            <input 
                type="number" 
                id="precio" 
                name="precio" 
                placeholder="Precio Propiedad" 
                value="<?php echo $precio; ?>">

            <label for="imagen">Imagen</label>
            <input 
                type="file"
                id="imagen" 
                accept="image/jpeg, image/png">

            <label for="description">Descripcion</label>
            <textarea 
                id="description" 
                name="description"
            >
                    <?php echo $descripcion; ?>
            </textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input  
                type="number" 
                id="habitaciones" 
                name="habitaciones" 
                value="<?php echo $habitaciones; ?>" 
                placeholder="Ej. 3" 
                min="1" 
                max="9"" > 

            <label for=" wc">Baños</label>
            <input 
                type="number" 
                id="wc" 
                name="wc" 
                value="<?php echo $wc; ?>" 
                placeholder="Ej. 3" 
                min="1" 
                max="9"" > 

            <label for=" estacionamiento">Estacionamiento</label>
            <input 
                type="number" 
                id="estacionamiento" 
                name="estacionamiento" 
                value="<?php echo $estacionamiento; ?>" 
                placeholder="Ej. 3" 
                min="1" 
                max="9"" > 
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <select name=" vendedor" value="<?php echo $vendedorId; ?>">
            <option value="">--seleccionar</option>
            <option value=" 1">Juan</option>
            <option value="2">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>

</main>

<?php
incluirTemplate('footer');
?>