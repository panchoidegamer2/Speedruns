<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/Maqueta.css">
    <title>Document</title>
</head>
<body>
    <?php
        require("../maqueta/headerSecundario.php")
    ?>
    <main>
    <?php
        echo'<div id="contenedorRuns">';
            require("../conexion/conexion.php");
            
            $sql = "SELECT * FROM runs WHERE estado='0' ORDER BY tiempo DESC";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while ($filas = mysqli_fetch_assoc($respuesta))
                {
                    echo '<div class="run">
                        <div class="autor">'.$filas['nombreUsuario'].'</div>
                        <div class="contenido">
                            <div class="tiempo"><p>'.$filas['tiempo'].'</div>
                            <div class="tipo"><p>'.$filas['tipoRun'].'</div>
                            <div class="porcentaje"><p>'.$filas['porcentaje'].'%</div>
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