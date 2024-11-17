<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/Maqueta.css">
    <link rel="stylesheet" href="../../Assets/Css/form.css">
    <title>Document</title>
</head>
<body>
    <?php
        require("../maqueta/headerSecundario.php")
    ?>
    <main>
        <div class="formulario">
            <h1>Iniciar sesion</h1>
            <form action="verificarSesion.php" method="post">
                <label>
                    <h4>Nombre de usuario</h4>
                    <input required placeholder="Nombre de usuario" type="text" name="Nombre"  id="Nombre">
                </label>
                <label>
                    <h4>Contraseña</h4>
                    <input required placeholder="Contraseña" type="text" name="Contraseña"  id="Contraseña">
                </label>
                <input type="submit" value="Login">
            </form>
            <p>si no tienes una cuenta<br><a href="../register/formRegister.php">registrate aqui</a></p>
        </div>
        <div class="informacion">
            <div class="contenedor">
                <h2>¿Que es el speedrunning?</h2>
                <p>El speedrunning es una manera de jugar a los videojuegos con reglas autoimpuestas.
                <br>La mas importante siendo el intentar pasarse el juego en la menor cantidad de tiempo posible, cronometrando las partidas y comparando los tiempos con la comunidad</p>
            </div>
            <div class="contenedor">
                <h2>¿Quienes somos?</h2>
                <p>Somos una comunidad de speedrunners que juegas al videojuego indie "hollow knight" 
                <br>Creado por TEAM cherry con un grupo de tan solo 3 personas
                <br>Nos encargamos de recopilar las partidas de este juego y organizarlas.
                </p>
            </div>    
        </div> 
    </main>  
    <?php
        require("../maqueta/footerSecundario.php")
    ?> 
</body>
</html>