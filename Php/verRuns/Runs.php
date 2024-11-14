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
        echo'<div id="contenedorNoticia">';
            require("../conexion/conexion.php");
            
            $sql = "SELECT * FROM noticias ORDER BY idNoticia DESC";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while ($filas = mysqli_fetch_assoc($respuesta))
                {
                    echo '<div class="noticia">
                        <div class="autor">'.$filas['nombreUsuario'].'</div>
                        <div class="contenidoNoticia">
                            <div class="descripcion"><p>'.$filas['descripción'].'</p>
                            <p>Publicado:'.$filas['fechaPublicacion'].'</p></div>
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