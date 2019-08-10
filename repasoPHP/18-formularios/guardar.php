<?php 

    if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
        echo $_POST['titulo'].'<br>';
        echo $_POST['descripcion'];

    } else {
        echo "Introduce correctamente los valores por la URL";
    }

;?>