<?php 

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MYSQL ha fallado: ".mysqli_connect_error();
} else {
    echo "Conexión OK";
}

// consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'UTF8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($notas = mysqli_fetch_assoc($query)) {
    var_dump($notas);
}

// Insertar en la BBDD desde PHP

$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota desde index.php','green')";

$insert = mysqli_query($conexion, $sql);

if ($insert) {
    echo "Inserción OK";
} else {
    echo "La inserción en la base de datos MYSQL ha fallado: ".mysqli_error($conexion);

}


;?>