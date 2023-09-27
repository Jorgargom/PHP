<?php

/* definir parametros*/

$numero = 50;
$numero2 =30;
$resultado ="";

function Resta ($numero,$numero2){
$resultado = $numero-$numero2;
    echo "La resta de los numeros $numero y $numero2 es igual a $resultado";
echo "</br>";
}
Resta ($numero,$numero2);

function Suma ($numero1=20,$numero3=10){
    $resultados = $numero1+$numero3;
        echo "La Suma de los numeros $numero1 y $numero3 es igual a $resultados";
        echo "</br>";
    }
    Suma ();

    function perro ($nombre,$raza){

        echo "El perro $nombre es de raza $raza";
    }
    perro("Firulais","pitubull");
    