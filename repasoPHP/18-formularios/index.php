<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
            <p><input type="text" name="nombre" autofocus="autofocus" required="required" placeholder="Nombre"></p>

        <label for="apellidos">Apellidos</label>
            <p><input type="text" name="apellidos" id="" autofocus="autofocus" minlength="1" placeholder="Apellidos" pattern="['A-Z']+" required="required"></p>
       
        <label for="nombre">Boton:</label>
            <p><input type="button" name="boton" value="Cliclame"></p>

        <label for="boton">Boton:</label>
            <p><input type="button" name="boton" value="Cliclame"></p>

        <label for="sexo">Boton:</label>
            <p>Hombre <input type="checkbox" name="sexo" value="Hombre"></p>
            <p>Mujer <input type="checkbox" name="sexo" value="Mujer"></p>

        <label for="fecha">Fecha:</label>
            <p><input type="date" name="fecha"></p>

        <label for="correo">Email:</label>
            <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo: </label>
            <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="numero">Numero:</label>
            <p><input type="number" name="numero"></p>

        <label for="pass">Password: </label>
            <p><input type="password" name="pass"></p>

        <label for="continente">Continente:</label>
            <p>America del sur<input type="radio" name="continente" value="America del Sur">
            Europa <input type="radio" name="continente" value="Europa">
            Asia <input type="radio" name="continente" value="Asia"></p>

        <label for="urlweb">Web: </label>
            <p><input type="url" name="urlweb"></p>

        <textarea name="texto" id="" cols="30" rows="10"></textarea>

        <p>Peliculas:</p>
            <select name="peliculas" id="">
                <option value="Spiderman">Spiderman</option>
                <option value="Hulk">Hulk</option>
                <option value="Indiana">Indiana</option>
                <option value="Capitan">Capitan</option>
            </select>
       
       <br>
       <br>

       <input type="submit" value="enviar">


    </form>
</body>
</html>