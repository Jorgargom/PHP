<?php

$peliculas = array('Batman', 'Spiderman', 'Harry Potter');

$pelis = ['Aladin','Rey Leon','One piece'];

$personas = $arrayName = array('nombre' => 'Jorge' , 'apellidos'=>'García Gómez', 'edad' =>'38' );


// Recorrer con FOR

echo "Listado de peliculas<br><hr>";

for ($i = 0; $i < count($pelis) ; $i++) { 
    echo $pelis[$i].'<br>';
}

echo "<hr>";

// Recorrer con FOREACH

echo "Listado de peliculas<br><hr>";

foreach ($peliculas as $peli) {
    echo $peli.'<br>';
}


// Array multidimensional


$contactos = array(
    array(
        'nombre' => 'Jorge', 
        'apellidos' => 'García Gómez' 
    ),
    array(
        'nombre' => 'Patri', 
        'apellidos' => 'Galan Ruiz' 
    ),
);

var_dump($contactos);






;?>