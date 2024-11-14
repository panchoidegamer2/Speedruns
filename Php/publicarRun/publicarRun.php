<?php
session_start();
include("../Conexion/conexion.php");

$usuario = $_SESSION['nombreUsuario'];
$tipoRun = $_POST['tipoRun'];
$duracion = $_POST['duracion'];
$porcentaje = $_POST['porcentaje'];

echo $usuario;

$query = "INSERT INTO runs(nombreUsuario, tipoRun, tiempo, porcentaje) VALUES ('$usuario','$tipoRun','$duracion','$porcentaje')";

$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);//se cierra la conexion a la base de datos
header("Location: ../../index.php");
?>