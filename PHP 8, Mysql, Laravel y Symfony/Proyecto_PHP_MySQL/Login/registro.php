<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>
    <nav>
        <h1>Unete a nuestra familia</h1>
    </nav>
    <div class="contenedor_p">
        <form action="validacion_registro.php" method="post">
            <h2>Registro</h2>
            <br><br>
            <label for="">Nombre</label>
            <br>
            <input type="text" name="" id="">
            <br><br>
            <label for="">Usuario</label>
            <br>
            <input type="text" name="usuario" id="" required>
            <br><br>
            <label for="">Contraseña</label>
            <br>
            <input type="text" name="password" required>
            <br><br>
            <label for="">Correo</label>
            <br>
            <input type="email" name="" id="" required>
            <br><br>
            <button class="ingresar">Registrarse</button>
        </form>
        <p class="text">¿Tienes una cuenta? Logueate aquí</p>
        <p class="login"><a href="">Login</a></p>
    </div>
</body>
</html>