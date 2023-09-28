<?php

class Maestro
{
    public $nombre;
    private $apellido;
    public $seccion;

    public function Atributos($nombre,$apellido,$seccion){
$this->name = $nombre;
$this->apellido = $apellido;
$this->seccion = $seccion;

echo "El maestro $nombre $apellido es encargado de la seccion $seccion";
    }
    
}

