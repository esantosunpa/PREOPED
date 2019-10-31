<?php
class Alumno extends Persona {
	private $anio_ingreso;
	private $cud;
        
        function __construct($array) {
            $this->anio_ingreso = $array["anio_ingreso"];
            $this->cud = $array["cud"];
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