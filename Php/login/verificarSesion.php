<?php
include("../Conexion/conexion.php");
$nombre = $_POST['Nombre'];
$Contraseña = $_POST['Contraseña'];
$hashedPassword = md5($Contraseña);
$sql = "SELECT * FROM usuarios WHERE nombreUsuario='".$nombre."'"; 

$resultado = mysqli_query($conexion, $sql);
$arreglo = mysqli_fetch_assoc($resultado);

if($arreglo == null)
{
    echo "Usuario no existe
    <a href='formLogin.php'>Volver</a>";
}
else
{
    if ($hashedPassword == $arreglo['contrasenia']) 
    {
        session_start();
        $_SESSION['tipoUsuario'] = $arreglo['tipoUsuario'];
        $_SESSION['nombreUsuario'] = $arreglo['nombreUsuario'];
        $_SESSION['cantRuns'] = $arreglo['cantRuns'];
        header ("Location: ../../index.php");
    } 
    else 
    {
        echo $hashedPassword;
        echo "contaseña incorrecta
        <a href='formLogin.php'>Volver</a>";
    }
}
?>