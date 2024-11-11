<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$DB = "speedrundb";

$conexion = mysqli_connect($servidor, $usuario, $contra, $DB);

if (!$conexion) {
    die("La conexión falló por ". mysqli_connect_error());
}
?>