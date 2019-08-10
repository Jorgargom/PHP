<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <h1>Validar formulario PHP</h1>
   <?php

        if (isset($_POST['error'])) {
            $error = $_POST['error'];

            if ($error == "faltan_valores") {
              echo "Introduce todos los datos";
            }
        }

    ;?>

    <form action="procesar_formulario.php" method="POST">
        <p><label for="nombre">Nombre: </label></p>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+">

        <p><label for="apellidos">Apellidos: </label></p>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+">
  
        <p><label for="edad">Edad: </label></p>
            <input type="number" name="edad" required="required" pattern="[0-9]+">

        <p><label for="email">Email: </label></p>
            <input type="email" name="email" required="required">

        <p><label for="pass">Password: </label></p>
            <input type="password" name="pass" required="required">
            
        <p><input type="submit" name="" value="Enviar"></p>
    </form>



</body>
</html>