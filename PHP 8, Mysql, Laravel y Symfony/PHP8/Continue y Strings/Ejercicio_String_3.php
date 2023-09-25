<?php
//strpos

$enunciado1 = "Es un hecho establecido hace demasiado tiempo que un 
lector se distraerá con el contenido del texto de un sitio mientras que mira su 
diseño. El punto de usar Lorem Ipsum es que tiene una distribucion 
más o menos normal de las letras, al contrario de usar textos como 
por ejemplo  Estos textos hacen pare
cerlo un español que se puede leer.";

$busqueda ="normal";

echo $enunciado1;
echo "</br>";
$completado = strpos($enunciado1,$busqueda);
echo $completado;
