<?php
 include("../Conexion/conexion.php");
 $nombre = $_POST['Nombre'];
 $mail = $_POST ['Email'];
 $Contrasenia = $_POST['Contrasenia'];

 $hashedPassword = md5($Contrasenia);
 
 $query = "INSERT INTO usuarios(nombreUsuario ,contrasenia , Email) VALUES ('$nombre' ,'$hashedPassword', '$mail')";
    
$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);//se cierra la conexion a la base de datos
header("Location: ../login/formLogin.php");
?>