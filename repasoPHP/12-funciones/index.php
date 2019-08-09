<?php 

/* FUNCIONES */


/* Ejemplo 1 */
function muestraNombres() {

    echo "Jorge García<br>";
    echo "Jorge García<br>";
    echo "Jorge García<br>";
    echo "Jorge García<br>";
    echo "Jorge García<br>";

}

muestraNombres();

echo "<hr>";

/* Ejemplo 2 */

function tabla($numero) {

    echo "tabla de multiplicar del número: $numero"."<br>";
    
    for ($i=1; $i <= 10 ; $i++) { 
        echo "$numero x $i = ".($numero*$i)."<br>";
    }
}

for ($i=1; $i <= 10 ; $i++) { 
    tabla($i);
}


echo "<hr>";

/* Ejemplo 3 */


function calculadora($numero1, $numero2) {
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1/$numero2;

    echo $suma.'<br>';
    echo $resta.'<br>';
    echo $multiplicacion.'<br>';
    echo $division.'<br>';



}

calculadora(20, 3);



echo "<hr>";

/* Ejemplo 3 */




;?>