<?php
 $numero1;
 $numero2;
 $resultado; //declaracion de variables

 function Suma ($numero1 = 30, $numero2= 30){
$resultado = $numero1+$numero2;
return $resultado;
 }
 echo "El resultado de la suma es: ";
 echo Suma();
 function Resta ($numero1 = 30, $numero2= 30){
    $resultado = $numero1-$numero2;
    return $resultado;
     }
     echo"</br>";
     echo "El resultado de la resta es: ";
     echo Resta();