<?php
session_start();
include("../Conexion/conexion.php");

$usuario = $_SESSION['nombreUsuario'];
$informacion = $_POST['informacion'];

$query = "INSERT INTO noticias(nombreUsuario, descripcion, estado) VALUES ('$usuario','$informacion','1')";

$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);//se cierra la conexion a la base de datos
header("Location: ../../index.php");
?>