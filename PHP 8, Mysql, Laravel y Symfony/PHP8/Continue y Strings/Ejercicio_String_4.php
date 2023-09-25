<?php

//str_replace
$enunciado = "Es un hecho establecido hace demasiado tiempo que un 
lector se distraerá con el contenido del texto de un sitio mientras que mira su 
diseño. El punto de usar Lorem Ipsum es que tiene una distribucion 
más o menos normal de las letras, al contrario de usar texto como 
por ejemplo  Estos texto hacen pare
cerlo un español que se puede leer.";

echo $enunciado;
echo "</br>";
echo "</br>";

echo "La palabra cambiada es: ". str_replace('tiempo','atardecer',$enunciado);

