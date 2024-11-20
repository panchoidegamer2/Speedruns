<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Css/Maqueta.css">
    <link rel="stylesheet" href="Assets/Css/Estilo.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        require ("Php/maqueta/header.php");
    ?> 
    <main>
        <div class="ultimasRuns">
            <div class="titulo">
                <h1>Ultimas runs <br>aprobadas</h1>
            </div>
            <?php
                $i=0;
                require("Php/conexion/conexion.php");
                $sql = "SELECT * FROM runs WHERE estado='1' ORDER BY idRun DESC";
                $respuesta = mysqli_query($conexion,$sql);
                if(mysqli_num_rows($respuesta)>0)
                {
                    for($i=0;$i<5;$i++)
                    {
                       $filas = mysqli_fetch_assoc($respuesta);
                       echo'
                            <div class="run">
                                <div id="Autor"><h2>'.$filas['nombreUsuario'].'</h2></div>
                                <div id="tiempo"><p>Duracion de la run: '.$filas['tiempo'].'</p></div>
                                <div id="tipoRun"><p>Tipo de run: '.$filas['tipoRun'].'</p></div>
                            </div>
                       ';
                    }
                }
            ?>
            <button class="boton"><a href="Php/Runs/verRuns.php">Ver todas las runs</a></button>
        </div>
        <div class="noticias">
            <div class="titulo">
                <br><h1>Noticias</h1>
            </div>
            <?php
                $i=0;
                require ("Php/conexion/conexion.php");
                $sql = "SELECT * FROM noticias WHERE estado='1' ORDER BY idNoticia DESC";
                $respuesta = mysqli_query($conexion,$sql);
                if(mysqli_num_rows($respuesta)>0)
                {
                    for($i=0;$i<5;$i++)
                    {
                        $filas = mysqli_fetch_assoc($respuesta);
                        echo '
                            <div class="noticia">
                                <div id="Autor"><h2>'.$filas['nombreUsuario'].'</h2></div>
                                <div id="descripcion"><p>'.$filas['descripcion'].'</p></div>
                            </div>
                        ';
                    }
                }
            ?>
            <button class="boton"><a href="Php/noticias/verNoticias.php">Ver mas noticias</a></button>
        </div>
    </main>
    <?php
        require("Php/maqueta/footer.php");
    ?>   
    
</body>
</html>