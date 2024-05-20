<?php
include 'conexion.php';
$bd = conectarBD();

// SI EXISTE EL ID INGRESADO ENTONCES:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['gas_id'];

    // Obtener los datos nuevos del formulario
    $gas_codigoBarras = $_POST['gas_codigoBarras'];
    $gas_marca = $_POST['gas_marca'];
    $gas_nombre = $_POST['gas_nombre'];
    $gas_precio = $_POST['gas_precio'];

    // Modificar gaseosas Existente
    $sql = "UPDATE gaseosa SET gas_codigoBarras='$gas_codigoBarras', gas_marca='$gas_marca', gas_nombre='$gas_nombre', gas_precio='$gas_precio' WHERE gas_id='$id'";

    if (mysqli_query($bd, $sql)) {
        echo "<script>alert('¡Gaseosa modificada correctamente!');</script>";
    } else {
        echo "<script>alert('Error al modificar la gaseosa: " . mysqli_error($bd) . "');</script>";
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

</head>

<body>
    <h1>Modificar Gaseosa</h1>
    <!-- Para modificar debe buscar una gaseosa especifica -->
    <h2>Buscar Gaseosa Existente</h2>
    <form method="get">
        <label for="gas_id">Id de la Gaseosa:</label>
        <input type="text" name="gas_id" id="gas_id"><br>
        <input type="submit" value="Buscar"><br>
    </form>
    <!-- Buscar Gaseosa Especifica para modificar -->
    <?php
    if (isset($_GET['gas_id'])) {
        $id = $_GET['gas_id'];
        $sql = "SELECT * FROM gaseosa WHERE gas_id='$id'";
        $resultado = mysqli_query($bd, $sql);
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            // Asignar los resultados a una variable
            $gaseosa = mysqli_fetch_assoc($resultado);
    ?>
            <form method="post">
                <!-- Campo oculto para almacenar el ID de la gaseosa -->
                <input type="hidden" name="gas_id" value="<?php echo $gaseosa['gas_id']; ?>">

                <label for="codigo">Código de Barras:</label>
                <input type="text" id="codigo" name="gas_codigoBarras" value="<?php echo $gaseosa['gas_codigoBarras']; ?>" required>

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="gas_marca" value="<?php echo $gaseosa['gas_marca']; ?>" required>

                <label for="nombre">Nombre de la Gaseosa:</label>
                <input type="text" id="nombre" name="gas_nombre" value="<?php echo $gaseosa['gas_nombre']; ?>" required>

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="gas_precio" value="<?php echo $gaseosa['gas_precio']; ?>" min="0.01" step="0.01" required>
                <br>
                <input type="submit" value="Modificar Gaseosa">
            </form>
    <?php
        } else {
            echo "<script>alert('No se encontró ninguna gaseosa con el ID proporcionado.')</script>";
        }
    }
    ?>
