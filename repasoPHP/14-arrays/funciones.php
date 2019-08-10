<?php

    $pelis = ['Aladin','Rey Leon','One piece','1'];

    asort($pelis); // Alfabeticamente de A - Z
    arsort($pelis); // Alfabeticamente de Z - A
    sort($pelis); //Alfabeticamente numeros y letras

    asort($pelis);


    $pelis[] = "Moneky D.Luffy";  // Añado al array

    array_push($pelis, "Chopper"); // Añado al array

    array_pop($pelis); //Elimino el ultimo indice del array

    unset($pelis['0']); //Elimino el indice del array que quiera por su posicion

    $indice = array_rand($pelis); //Extraer una posicion del array aleatoriamente
    echo($pelis[$indice]);

    var_dump(array_reverse($pelis)); // Ordena el array del ultimo al primero

    $resultado = array_search('Aladin',$pelis); // Busca coincidencia en el array y muestra su posicion

    var_dump($resultado); // Ordena el array del ultimo al primero

    echo sizeof($pelis); // Tamaño del array
;?>