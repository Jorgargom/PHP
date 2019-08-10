<?php 

/* Para mostrar el valor de las cookies tengo que usar $_COOKIE , una variable superglobal
es un array asociativo */

if (isset($_COOKIE['migalleta'])) {
    echo $_COOKIE['migalleta'];
} else {
    echo "No existe mi cookie";
    
}

echo '<hr>'
;
if (isset($_COOKIE['unyear'])) {
    echo $_COOKIE['unyear'];
} else {
    echo "No existe mi cookie";
    
}

echo '<hr>'


;?>

<a href="borrar_cookies.php">Borrar mis cookies</a>