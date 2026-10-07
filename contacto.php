<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="registrado.php">Registrado</a></li>
    </ul>
    </nav>
    <h1>Registrame</h1>
    <form action="registrado.php" method="POST">
        <label for="nombre ">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="correo ">Email:</label>
        <input type="email" name="correo" id="correo"><br>
        <input type="submit" value="Registrarme">
    </form>
</body>
</html>
