<?php

/*hacer un programa el cual no muestre los multiplos de 2*/

for ($i=0; $i <=20 ; $i++) { 
    if (($i%3)== 0) {
        continue;
    }
    echo $i;
    echo "</br>";
}