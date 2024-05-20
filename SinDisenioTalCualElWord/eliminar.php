<?php
include 'conexion.php';
$bd = conectarBD();
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

    <h1>Eliminar Gaseosa</h1>
    <!-- Para eliminar debe buscar una gaseosa especifica -->
    <h2>Buscar Gaseosa Existente</h2>
    <form method="post">
        <label for="gas_id">Id de la Gaseosa:</label>
        <input type="text" name="gas_id" id="gas_id"><br>
        <input type="submit" value="Buscar"><br>
    </form>
    <!-- Buscar Gaseosa Especifica para eliminar -->
    <?php
    if (isset($_POST['gas_id'])) {
        $id = $_POST['gas_id'];
        $sql = "SELECT * FROM gaseosa WHERE gas_id='$id'";
        $resultado = mysqli_query($bd, $sql);
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $gaseosa = mysqli_fetch_assoc($resultado);
            // Eliminar Gaseosa
            $sql = "DELETE FROM gaseosa WHERE gas_id='$id'";

            if (mysqli_query($bd, $sql)) {
                echo "<script>alert('¡Gaseosa eliminada correctamente!');</script>";
            } else {
                echo "<script>alert('Error al eliminada la gaseosa: " . mysqli_error($bd) . "');</script>";
            }
        } else {
            echo "<script>alert('No se encontró ninguna gaseosa con el ID proporcionado.')</script>";
        }
    }
    ?>
