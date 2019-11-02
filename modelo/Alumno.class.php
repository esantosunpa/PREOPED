<?php
//Para mostrar los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Persona.class.php';

class Alumno extends Persona {
	protected $anio_ingreso;
	protected $cud;
        
        function __construct($array) {
            
            //parent::__construct($array);
            parent::mapeoArrayAtributos($array);
            
          
        }

        
        function getAnio_ingreso() {
            return $this->anio_ingreso;
        }

        function getCud() {
            return $this->cud;
        }

        function setAnio_ingreso($anio_ingreso) {
            $this->anio_ingreso = $anio_ingreso;
        }

        function setCud($cud) {
            $this->cud = $cud;
        }

}

$array["id"] = 1;
$array["nombre"] = "Alumno";
$array["anio_ingreso"] = "2019";

$P1 = new Alumno($array);
var_dump($P1);