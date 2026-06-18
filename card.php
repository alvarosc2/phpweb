<?php
// Recuperar datos enviados por POST
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumno</title>
    <link rel="stylesheet" href="card.css">
</head>
<body>

<div class="bg-blur">
    <div class="card">
        <img src="img/alumno1.png" alt="Alumno">
        <div class="card-info">
            <h2>Alumno</h2>
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Apellidos:</strong> <?php echo $apellidos; ?></p>
            <p><strong>Edad:</strong> <?php echo $edad; ?></p>
            <p><strong>Correo:</strong> <?php echo $correo; ?></p>
        </div>
    </div>
</div>

</body>
</html>
