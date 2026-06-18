<?php
// index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar alumno</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="form-container container">
    <h1>Registrar alumno</h1>

    <form action="card.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <button type="submit">Registrar</button>
    </form>
</div>

</body>
</html>
