<?php
session_start();
include("../Conexion/conexion.php");

$usuario = $_POST['usuario'];

$query = "UPDATE usuarios SET estado='2' WHERE nombreUsuario='".$usuario."'";

$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);//se cierra la conexion a la base de datos
header("Location: verRuns.php");
?>