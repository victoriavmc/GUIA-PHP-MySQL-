<!-- Llamar a la conexion -->
<?php
include 'conexion.php';
$bd = conectarBD();

//Insertar nuevas gaseosas
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $gas_codigoBarras = $_POST['gas_codigoBarras'];
    $gas_marca = $_POST['gas_marca'];
    $gas_nombre = $_POST['gas_nombre'];
    $gas_precio = $_POST['gas_precio'];

    // Insertar los datos en la tabla
    $sql = "INSERT INTO gaseosa (gas_codigoBarras, gas_marca, gas_nombre, gas_precio) VALUES ('$gas_codigoBarras', '$gas_marca', '$gas_nombre', $gas_precio)";

    // Mensaje segun si funciono la carga de los datos 
    // (Aplico ALERT que es JavaScript para que salte a simple vista si funciona )
    if (mysqli_query($bd, $sql)) {
        echo "<script>alert('¡Gaseosa agregada correctamente!');</script>";
    } else {
        echo "<script>alert('Error al agregar la gaseosa: " . mysqli_error($bd) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="VictoriaVMC" content="GUIA PHP" />
    <link rel="icon" href="./No enseño porque NO es Relevante al funcionamiento/perroPepsi.jpg" />
    <title>PerriPepsi</title>

    <!-- NO ESTA EN LA EXPLICACION, ES UN MINIMO EFECTO VISUAL NADA MAS -->
    <link rel="icon" href="./No enseño porque NO es Relevante al funcionamiento/perroPepsi.jpg" />
    <link rel="stylesheet" href="./No enseño porque NO es Relevante al funcionamiento/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poetsen+One&family=Righteous&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NO ESTA EN LA EXPLICACION, ES UN MINIMO EFECTO VISUAL NADA MAS -->
    <?php
    $template_path = "./No enseño porque NO es Relevante al funcionamiento/header.php";
    include $template_path;
    ?>
    <!-- Esto si -->
    <h1>Agregar Gaseosa</h1>
    <form method="post">
        <label for="codigo">Código de Barras:</label>
        <input type="text" id="codigo" name="gas_codigoBarras" required>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="gas_marca" required>

        <label for="nombre">Nombre de la Gaseosa:</label>
        <input type="text" id="nombre" name="gas_nombre" required>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="gas_precio" min="0.01" step="0.01" required>
        <br>
        <input type="submit" value="Agregar Gaseosa">
    </form>
    <!-- NO ESTA EN LA EXPLICACION, ES UN MINIMO EFECTO VISUAL NADA MAS -->
    <?php
    $template_path = "./No enseño porque NO es Relevante al funcionamiento/footer.php";
    include $template_path;
    ?>