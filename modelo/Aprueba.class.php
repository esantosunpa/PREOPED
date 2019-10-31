<?php
include_once 'ModeloDatosGenerico.php';

class Aprueba extends ModeloDatosGenerico{
	private $id;
	private $fecha;
	private $calificacion;
	private $id_asignatura;
	private $id_alumno;
        function __construct($array) {
            parent::mapeoArrayAtributos($array);
        }

        function getId() {
            return $this->id;
        }

        function getFecha() {
            return $this->fecha;
        }

        function getCalificacion() {
            return $this->calificacion;
        }

        function getId_asignatura() {
            return $this->id_asignatura;
        }

        function getId_alumno() {
            return $this->id_alumno;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function setCalificacion($calificacion) {
            $this->calificacion = $calificacion;
        }

        function setId_asignatura($id_asignatura) {
            $this->id_asignatura = $id_asignatura;
        }

        function setId_alumno($id_alumno) {
            $this->id_alumno = $id_alumno;
        }


}