<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="VictoriaVMC" content="GUIA PHP" />
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
    $template_path = "./No enseño porque NO es Relevante al funcionamiento/headerMenu.php";
    include $template_path;
    ?>
    <!-- Esto si -->
    <h1>Dispensador de Gaseosa</h1>
    <h2>Menu</h2>
    <ul>
        <li><a href="crear.php">Agregar Producto</a></li>
        <li><a href="modificar.php">Modificar Producto</a></li>
        <li><a href="eliminar.php">Eliminar Producto</a></li>
        <li><a href="buscar.php">Buscar Producto</a></li>
    </ul>
    <!-- NO ESTA EN LA EXPLICACION, ES UN MINIMO EFECTO VISUAL NADA MAS -->
    <?php
    $template_path = "./No enseño porque NO es Relevante al funcionamiento/footer.php";
    include $template_path;
    ?>