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
        <form action="publicarRun.php" class="formulario" method="post">
            <h1>ingresar los datos de tu run</h1>
            <label>
                    Tipo de run
                    <select name="tipoRun" id="tipoRun">
                        <option value="Any%">any%</option>
                        <option value="Low%">Low%</option>
                        <option value="106%">106%</option>
                        <option value="107%">107%</option>
                        <option value="112%">112%</option>
                        <option value="TrueEnding">TrueEnding</option>
                        <option value="AnySkill">AnySkill</option>
                    </select>
            </label>
            <label>
                Duracion
                    <input required placeholder="Tiempo" type="Time" name="duracion"  id="Tiempo" step="1" min="00:00:01" value="00:00:00">
            </label>
            <label>
                Porcentaje de completacion
                    <input required type="number" name="porcentaje"  id="Porcentaje" min="0" max="112">
            </label>
            <input type="submit" value="Subir run">
        </form>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>
</body>
</html>