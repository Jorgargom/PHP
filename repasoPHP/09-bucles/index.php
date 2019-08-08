<?php

//BUCLE WHILE

// Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como sea necesario, en base a una condicion.
$numero = 0;

while ($numero <= 10) {
    echo '<p>'.$numero.'</p>';
    $numero++;
}

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
   $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";
$cont = 0;
while ($cont <= 10) {
    echo "$numero x $cont = ".($numero*$cont)."<br>";
    $cont++;
}


echo "<hr>";

// DO WHILE

$edad = 18;
$contador = 1;
do {
    echo "Tienes acceso al local privado $contador"."<br>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);









;?>
