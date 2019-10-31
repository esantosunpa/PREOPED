<?php
//NO ANDA
class Alumno extends Persona {
	private $anio_ingreso;
	private $cud;
        
        function __construct($array) {
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

//echo "asd";