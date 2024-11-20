<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/Maqueta.css">
    <link rel="stylesheet" href="../../Assets/Css/verRuns.css">
    <title>Document</title>
</head>
<body>
    <?php
        require("../maqueta/headerSecundario.php")
    ?>
    <main>
    <?php
        echo'<div class="contenedorRuns">
            <h2>Runs por aprobar</h2>';
            require("../conexion/conexion.php");
            
            $sql = "SELECT * FROM runs WHERE estado='0' ORDER BY tiempo DESC";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while ($filas = mysqli_fetch_assoc($respuesta))
                {
                    echo '<div class="run">
                        <div class="autor"><p>'.$filas['nombreUsuario'].'</p></div>
                        <div class="contenido">
                            <div class="tiempo"><p>Duracion de la run: '.$filas['tiempo'].'</p></div>
                            <div class="tipo"><p>Tipo de la run: '.$filas['tipoRun'].'</p></div>
                            <div class="porcentaje"><p>Porcentaje: '.$filas['porcentaje'].'%</p></div>
                        </div>
                        <form action="aprobarRun.php" method="post">
                            <input type="hidden" name="idRun" value="'.$filas['idRun'].'">
                            <input type="submit" value="Aprovar run">
                        </form>
                        
                    </div>';   
                }
            }
            echo '</div>';
    ?>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>

</body>
</html>