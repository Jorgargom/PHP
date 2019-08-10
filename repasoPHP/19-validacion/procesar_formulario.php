<?php 

    if (empty($_POST['nombre']) && empty($_POST['apellidos']) && empty($_POST['edad']) && empty($_POST['email']) && isset($_POST['pass'])) {
        $error = false;

        $nombre= $_POST['nombre'];
        $apellidos= $_POST['apellidos'];
        $edad= $_POST['edad'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];
     

    } else {
      $error = "faltan_valores";
      header("Location:index.php?error=$error");
    }

;?>