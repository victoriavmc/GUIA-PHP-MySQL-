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
    <!-- NO ESTA EN LA EXPLICACION, ES UN MINIMO EFECTO VISUAL NADA MAS -->
    <?php
    $template_path = "./No enseño porque NO es Relevante al funcionamiento/footer.php";
    include $template_path;
    ?>