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
    <h1>YA ESTAS REGISTRADO!!!!!</h1>
    <?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        echo "Bienvenido: " . $nombre . "<br>" . "Correo: " . $correo;
    ?>
</body>
</html>
