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
        
        echo '
                <div class="AprovarRuns">
                <div class="contenedor">
                    <h3>Para que tu run salga en la lista, debe ser aprobada por un administrador.</h3>';
        if (isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1)
        {
            echo'
            <br><button><a href="runsPorAprobar.php">Lista de runs por aprovar</a></button>';
        }
        echo '</div>
                </div>';


        echo'<div class="contenedorRuns">';
            require("../conexion/conexion.php");
            
            $sql = "SELECT * FROM runs WHERE estado='1' ORDER BY tiempo DESC";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while ($filas = mysqli_fetch_assoc($respuesta))
                {
                    echo '<div class="run">
                        <div class="autor"><h2>'.$filas['nombreUsuario'].'</h2></div>
                        <div class="contenido">
                            <div class="tiempo"><p>Tiempo: '.$filas['tiempo'].'</p></div>
                            <div class="tipo"><p>Tipo de la run: '.$filas['tipoRun'].'</p></div>
                            <div class="porcentaje"><p>Porcentaje de completacion: '.$filas['porcentaje'].'%</p></div>
                        </div>
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