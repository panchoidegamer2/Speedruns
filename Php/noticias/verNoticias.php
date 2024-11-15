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
        echo'<div id="contenedorNoticias">';
            require("../conexion/conexion.php");
        
            $sql = "SELECT * FROM noticias WHERE estado='1' ORDER BY idNoticia DESC";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while($filas = mysqli_fetch_assoc($respuesta))
                {
                        echo '
                            <div class="noticia">
                                <div id="Autor"><h1>'.$filas['nombreUsuario'].'</h1></div>
                                <div id="descripcion">'.$filas['descripcion'].'</div>
                            </div>
                        ';   
                }
            }
        echo '</div>';
        if (isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1){
                echo '
                    <div class="subirNoticias">
                        <button><a href="formNoticia.php">Publicar una noticia</a></button>
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