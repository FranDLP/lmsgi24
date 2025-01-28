<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>Formulario de prueba</h1>

    <!-- Formulario para agregar un coche -->
    <div class="group">
    <form action="index.php" method="post">
        <label for="nombre">Nombre (requerido):</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido (requerido):</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="gmail">Email:</label>
        <input type="text" id="gmail" name="gmail" required><br><br>

        <input class="form-btn" name="submit" type="submit"><br><br>
    </form>
    </div>
</body>

</html>
