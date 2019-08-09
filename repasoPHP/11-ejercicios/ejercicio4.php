<?php 


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "Calculadora<br>";

    echo "Suma: ".($numero1+$numero2)."<br>";
    echo "Resta: ".($numero1-$numero2)."<br>";
    echo "Multiplicación: ".($numero1*$numero2)."<br>";
    echo "División: ".($numero1/$numero2)."<br>";
} else {
    echo "Introduce correctamente los valores por la URL";
}













;?>