<?php
    // Verifica si se enviaron los datos del formulario antes de intentar acceder a ellos
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Verifica si las variables POST 'email' y 'password' están definidas antes de asignarlas
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $correo = $_POST['email'];
            $contraseña = $_POST['password'];

            // Escapa los valores para prevenir ataques de inyección de código (SQL u otros)
            $correo = htmlspecialchars($correo);
            $contraseña = htmlspecialchars($contraseña);

            // Mostrar un mensaje de bienvenida
            echo "Bienvenido, tu correo es: $correo y tu contraseña es: $contraseña";
        } else {
            echo "No se enviaron todos los datos requeridos.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">Correo:</label>
            <br>
            <input type="email" name="email" required>
            <br>
            <label for="password">Contraseña:</label>
            <br>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
