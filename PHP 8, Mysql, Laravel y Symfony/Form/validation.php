<?php

$correo = $_POST['email'];
$contraseña = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2><?php echo Bienvenido!! tu correo es: $correo y tu contraseña es: $contraseña; ?></h2>
</body>
</html>m