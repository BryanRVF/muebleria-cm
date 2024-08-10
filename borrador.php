<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Bloques Horizontales</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.block {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
}

#section1 {
    background-color: #f2f2f2;
}

#section2 {
    background-color: #cccccc;
}

#section3 {
    background-color: #999999;
}

h2 {
    margin-top: 0;
    text-align: center;
}

p {
    text-align: center;
}

</style>

    <div class="block" id="section1">
        <h2>Sección 1</h2>
        <p>Contenido de la primera sección.</p>
    </div>

    <div class="block" id="section2">
        <h2>Sección 2</h2>
        <p>Contenido de la segunda sección.</p>
    </div>

    <div class="block" id="section3">
        <h2>Sección 3</h2>
        <p>Contenido de la tercera sección.</p>
    </div>

</body>
</html>
