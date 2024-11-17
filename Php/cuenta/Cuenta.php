<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/Maqueta.css">
    <link rel="stylesheet" href="../../Assets/Css/cuenta.css">
    <title>Document</title>
</head>
<body>
    <?php
        require("../maqueta/headerSecundario.php")
    ?>
    <main>
        <?php
        require ("../conexion/conexion.php");
        
        $usuario = $_SESSION['nombreUsuario'];
        $mail = $_SESSION['email'];
        
        $query = "SELECT * FROM runs WHERE nombreUsuario='".$usuario."' AND estado='1'";
        $respuesta = mysqli_query($conexion,$query);
        $arreglo = mysqli_fetch_assoc($respuesta);

        echo'
            <div class="informacion">
            <h1>'.$usuario.'</h1><br><a>'.$mail.'</a><br>
            <button><a href="logOut.php">Cerrar sesion</a></button>
            </div>

            <div class="misRuns">
                <h1>Mis runs</h1>';
            if (mysqli_num_rows($respuesta)>0)
            {
                while ($arreglo = mysqli_fetch_assoc($respuesta))
                {
                    echo'<div class="run">
                            <div class="contenido">
                                <div class="tiempo"><p>Duracion de la run: '.$arreglo['tiempo'].'</p></div>
                                <div class="tipo"><p>Tipo de run: '.$arreglo['tipoRun'].'</p></div>
                                <div class="porcentaje"><p>Porcentaje de completacion: '.$arreglo['porcentaje'].'%</p></div>
                            </div>
                        </div>';   
                }
            }
            else{
                echo'
                    <h2>Aun no tienes runs aprobadas</h2>
                ';
            }
            echo '</div>';
        ?>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>
</body>
</html>