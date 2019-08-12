<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <!-- CABECERA -->
    <header>
    
        <div id="logo">
            <!-- LOGO -->
            <a href="index.php">
                Blog de videojuegos
            </a>
        </div>
        
        <!-- MENU -->

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>

    </header>
    
    <!-- CONTENEDOR -->

    <div id="container">
        <!-- BARRA LATERAL -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
           
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entar">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Identificate</h3>
           
                <form action="registro.php" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>

        <!-- CAJA PRINCIPAL -->

        <div id="principal">
            <h1>Últimas entradas</h1>

            <article class="entradas">
                <h2>Título de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus debitis 
                temporibus quibusdam deserunt numquam veniam ab quia nisi nostrum officiis nobis, 
                dolore sunt quam, repellat non ea iusto. Minima, qui?</p>
            </article>
        
        </div>

    </div>
    
    <!-- PIÉ DE PÁGINA  -->

    <footer id="pie">
        <p>Desarrollado por Jorge García &copy; 2019</p>
    </footer>
    
</body>
</html>