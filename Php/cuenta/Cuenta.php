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
        $usuario = $_SESSION['nombreUsuario'];
        $mail = $_SESSION['email'];
        echo'
            <div class="informacion">
            '.$usuario.'<br>'.$mail.'
            <button><a href="logOut.php">Cerrar sesion</button>
            </div>
        ';
        ?>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>
</body>
</html>