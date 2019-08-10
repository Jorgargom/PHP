<?php 

// Debuguear
$nombre = "Jorge";
var_dump($nombre);

// Fechas

echo date("d-m-Y");
echo "<br>";

// Time

echo time();
echo "<br>";

// Matemáticas

echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br>";

echo "Numero aletario entre 10 y 100: ".rand(10,100);
echo "<br>";

echo "El número pi es: ".pi();
echo "<br>";

echo "El redondeo de este número es: ".round(16.3025, 1);
echo "<br>";


// Mas funciones generales

echo gettype($nombre);
echo "<br>";


if (is_string($nombre)) {
    echo "Es una string";
}
echo "<br>";


if (!is_float($nombre)) {
    echo "No es un número con decimales";
}
echo "<br>";

if (isset($nombre)) {
    echo "Existe";
} else {
    echo "No existe";
}
echo "<br>";


$espacios ="     hola   ";

var_dump (trim($espacios));
echo "<br>";

// Eliminar variables

$year = 2020;
unset ($year);
var_dump($year);
echo "<br>";

// Reemplazar palabras
str_replace();
echo "<br>";

// Mayúsculas y minúsculas

strtolower();
strtoupper();



;?>