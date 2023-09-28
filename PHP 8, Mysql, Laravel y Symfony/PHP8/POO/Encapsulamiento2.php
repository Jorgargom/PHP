<?php

class Estudiante
{
    private $Nombre_Alumno = "Pedro Ramirez" ;
    public $Escuela;
    public $NIE;
  
    public function informacion ($Nombre_Alumno,$Escuela,$NIE){
$this->nombre = $Nombre_Alumno ;
$this->institucion = $Escuela;
$this->nie =$NIE;

echo "El estudiante $Nombre_Alumno de la institucion $Escuela tiene 
como numero de NIE: $NIE";

    }
}


