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
        echo'<div id="contenedorUsuarios">';
            require("../conexion/conexion.php");
        
            $sql = "SELECT * FROM usuarios ORDER BY cantRuns";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while ($filas = mysqli_fetch_assoc($respuesta))
                {
                    echo '<div class="usuario">
                        <div class="nombre">'.$filas['nombreUsuario'].'</div>
                        <div class="contenido">
                            <div class="cantidadRuns"><p>'.$filas['cantRuns'].'</div>
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