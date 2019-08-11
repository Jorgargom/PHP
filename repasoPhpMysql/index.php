<?php 

// Conectar a la base de datos

$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexion es correcta

if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MYSQL ha fallado: ".mysqli_connect_error();
} else {
    echo "Conexión OK";
}





;?>