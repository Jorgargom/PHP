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
            <h2>Logueate</h2>
            <br><br>
            <label for="">Usuario</label>
            <br>
            <input type="text" name="usuario" id="">
            <br><br>
            <label for="contraseña">Contraseña</label>
            <br>
            <input type="password" name="contraseña" id="">
            <br><br>
            <button type="submit">Ingresar</button>
        </form>
        <br>
        <p class="registrate"></p>
        <p class="vinculo"><a href="registro.php" class="r">Registrate</a></p>
    </div>
</body>
</html>