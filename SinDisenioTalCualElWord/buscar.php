<?php
include 'conexion.php';
$bd = conectarBD();

// Listar todas las gaseosas
$sqlListar = "SELECT * FROM gaseosa";
$resultadoListar = mysqli_query($bd, $sqlListar);

// Inicializar la variable $id
$id = null;
$idExiste = FALSE;

// Buscar una gaseosa por su ID
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['gas_id'];
    $sqlBuscar = "SELECT * FROM gaseosa WHERE gas_id = '$id'";
    $resultadoBuscar = mysqli_query($bd, $sqlBuscar);

    if (isset($resultadoBuscar)) {
        if (mysqli_num_rows($resultadoBuscar) > 0) {
            $idExiste = TRUE;
        } else {
            echo "<script>alert('No se encontró ninguna gaseosa con el ID proporcionado.')</script>";
        }
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
    <h1>Listar y Buscar Gaseosas</h1>
    <h2>Listado de Gaseosas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Código de Barras</th>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php
        // Mostrar resultados de la lista
        while ($fila = mysqli_fetch_assoc($resultadoListar)) {
            echo "<tr";
            // Si hay una búsqueda y el ID de la fila coincide con el ID buscado, resaltar la fila
            if (!is_null($id) && $idExiste = TRUE && $fila['gas_id'] == $id) {
                echo " style='background-color: #090C9B; color:white'";
            }
            echo ">";
            echo "<td>" . $fila['gas_id'] . "</td>";
            echo "<td>" . $fila['gas_codigoBarras'] . "</td>";
            echo "<td>" . $fila['gas_marca'] . "</td>";
            echo "<td>" . $fila['gas_nombre'] . "</td>";
            echo "<td>" . $fila['gas_precio'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Buscar Gaseosa por ID</h2>
    <form method="post">
        <label for="gas_id">ID de la Gaseosa:</label>
        <input type="text" name="gas_id" id="gas_id"><br>
        <input type="submit" value="Buscar">
    </form>