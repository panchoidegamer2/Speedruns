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
        
            $sql = "SELECT * FROM usuarios WHERE tipoUsuario='0' AND estado='1' ORDER BY cantRuns";

            $respuesta = mysqli_query($conexion,$sql);

            if (mysqli_num_rows($respuesta)>0)
            {
                while ($filas = mysqli_fetch_assoc($respuesta))
                {
                    echo '<div class="usuario">
                        <div class="nombre">'.$filas['nombreUsuario'].'</div>
                        <div class="contenido">
                            <div class="cantidadRuns"><p>'.$filas['cantRuns'].'</div>
                        </div>';
                        if (isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1)
                        {
                          echo '<form action="banearJugador.php" method="post">
                            <input type="hidden" name="usuario" value="'.$filas['nombreUsuario'].'">
                            <input type="submit" value="Banear usuario">
                        </form>'; 
                        }
                        echo '</div>';   
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