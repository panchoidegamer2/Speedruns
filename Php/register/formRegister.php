<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/forms/register.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <h1>registrarse</h1>
        <form action="register.php" method="post">
            <label>
                <input required placeholder="Nombre de usuario" type="text" name="Nombre"  id="Nombre">
            </label>
            <label>
                <input required placeholder="Email" type="text" name="Email"  id="Email">
            </label>
            <label>
                <input required placeholder="Contraseña" type="text" name="Contraseña"  id="Contraseña">
            </label>
            <label>
                <input required placeholder="Confirmar contraseña" type="password" name="Confirmar"  id="Confirmar">
            </label>
            <input type="submit" value="Registrarse">
        </form> 
        <h3>si ya tienes una cuenta <br> <a href="../login/formLogin.php">inicia sesion aqui</a></h3>
    </div>
    <div class="informacion">
        <div class="speedrun">
            <h2>¿Que es el speedrunning</h2>
            <p>El speedrunning es una manera de jugar a los videojuegos con reglas autoimpuestas, la mas importante siendo el intentar pasarse el juego en la menor cantidad de tiempo posible, cronometrando las partidas y comparando los tiempos con la comunidad</p>
        </div>
        <div class="presentacion">
            <h2>¿Quienes somos?</h2>
            <p>somos una comunidad de speedrunners que juegas al videojuego indie "hollow knight" <br> creado por TEAM cherry con un grupo de tan solo 3 personas</p>
        </div> 
    </div>
    
</body>
</html>