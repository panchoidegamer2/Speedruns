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
            
            $sql = "SELECT * FROM runs WHERE estado='1' ORDER BY tiempo DESC";

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
                    </div>';   
                }
            }
            echo '</div>';

            if (isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1){
                echo '
                    <div class="AprovarRuns">
                        <button><a href="runsPorAprovar.php">Lista de runs por aprovar</a></button>
                    </div>
                ';
            }
    ?>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>

</body>
</html>