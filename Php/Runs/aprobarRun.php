<?php
session_start();
include("../Conexion/conexion.php");

$idRun = $_POST['idRun'];

$query = "UPDATE runs SET estado='1' WHERE idRun='".$idRun."'";

$resultado = mysqli_query($conexion, $query); 

mysqli_close($conexion);//se cierra la conexion a la base de datos
header("Location: verRuns.php");
?>