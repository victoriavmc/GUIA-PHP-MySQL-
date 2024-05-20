<?php
function conectarBD()
{
    $host = 'localhost';
    $usuario = 'root';
    $contrasenia = '';
    $baseDatos = 'dispensadorGaseosa';

    $bd = mysqli_connect($host, $usuario, $contrasenia, $baseDatos);

    if (!$bd) {
        echo('No se pudo conectar a la base de datos: ' . mysqli_connect_error());
    }
    return $bd;
}
?>