<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/Maqueta.css">
    <link rel="stylesheet" href="../../Assets/Css/Noticias.css">
    <title>Document</title>
</head>
<body>
    <?php
        require("../maqueta/headerSecundario.php")
    ?>
    <main>
        <div class="contenedor">
        <form action="subirNoticia.php" class="formulario" method="post">
            <h1>Escribe la noticia</h1>
            <label>
                    <input type="text" name="informacion" id="informacion" min="1" max="200">
            </label>
            <input type="submit" value="Publicar noticia">
        </form> 
        </div>
        
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>
</body>
</html>