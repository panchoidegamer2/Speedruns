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
        <form action="subirNoticia.php" class="formulario" method="post">
            <h1>Escribe la noticia</h1>
            <label>
                    <input type="text" name="informacion" id="informacion" max="200">
            </label>
            <input type="submit" value="Publicar noticia">
        </form>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>
</body>
</html>