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
            <h1>ingresar los datos de tu run</h1>
            <form action="publicarRun.php" id="publicarRun" method="post">
                <label>
                        <h4>Tipo de run</h4>
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
                    <h4>Duracion</h4>
                        <input required placeholder="Tiempo" type="Time" name="duracion"  id="Tiempo" step="1" min="00:00:01" value="00:00:00">
                </label>
                <label>
                    <h4>Porcentaje de completacion</h4>
                        <input required type="number" name="porcentaje"  id="Porcentaje" min="0" max="112" value="0">
                </label>
                <input type="submit" value="Subir run">
            </form>
        </div>
    </main>
    <?php
        require("../maqueta/footerSecundario.php")
    ?>
</body>
</html>