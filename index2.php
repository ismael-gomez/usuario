<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Datos de Usuarios</title>
</head>
<body>
    <form method="post">
        <h1>Ingreso de Datos de Usuarios</h1>
        <input type="text" name="name" placeholder="nombre">
        <input type="number" name="Nocontrol" placeholder="No.Control">
        <input type="number" name="contra" placeholder="contraseña">
        <input type="date" name="fecha" placeholder="fecha">
        <input type="submit" name="Enviar">
    </form>
    <?php
    include("registros2.php");
    ?>
</body>
</html>