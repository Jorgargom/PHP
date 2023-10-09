<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <h1>Bienvenido</h1>
    </nav>
    <div class="contenedor">
        <form action="validacion.php" method="post">
            <h2>Loguin</h2>
            <br><br>
            <label for="">Usuario</label>
            <br>
            <input type="text" name="usuario" id="">
            <br><br>
            <label for="contraseña">Contraseña</label>
            <br>
            <input type="password" name="contraseña" id="">
            <br><br>
            <button type="submit" class="ingresar">Ingresar</button>
        </form>
        <br>
        <p class="registrate">Si no tienes una cuenta</p>
        <p class="vinculo"><a href="registro.php" class="p">Registrate</a></p>
    </div>
</body>
</html>