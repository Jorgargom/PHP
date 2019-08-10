<?php 

    $numeros = array(55,66,77,88,33,2,11);


    function mostrarArray ($numeros) {
        $resultado = "";
        foreach ($numeros as $numero) {
            $resultado .= $numero.'<br>';
        }
        return $resultado;
    }

    echo sort($numeros);
    echo mostrarArray($numeros);

    echo '<br>';

    echo count($numeros);

    $busqueda = 55;

    echo '<h1>Buscar en el array el número '.$busqueda.'</h1>';

    $search = array_search($busqueda, $numeros);

    if (!empty($search)) {
        echo "Existe";
    } else {
        echo "No existe";
    }


;?>