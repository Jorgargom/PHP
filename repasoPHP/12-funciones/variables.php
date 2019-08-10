<?php 
// Variables locales -->

$local = "Hola que tal";
echo $local;

// Varibles globales -->
echo "<br>";

function holadenuevo(){
    global $local;
    echo $local;
}

return holadenuevo();



echo "<br>";



;?>