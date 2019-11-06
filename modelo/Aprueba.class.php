<?php
include_once 'ModeloDatosGenerico.php';

class Aprueba extends ModeloDatosGenerico{
	protected $id;
	protected $fecha;
	protected $calificacion;
//	protected $id_asignatura;
//	protected $id_alumno;
        protected $asignatura;
	protected $alumno;
        
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

//        function getId_asignatura() {
//            return $this->id_asignatura;
//        }
//
//        function getId_alumno() {
//            return $this->id_alumno;
//        }

        function setId($id) {
            $this->id = $id;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function setCalificacion($calificacion) {
            $this->calificacion = $calificacion;
        }
        
        function getAsignatura() {
            return $this->asignatura;
        }

        function getAlumno() {
            return $this->alumno;
        }

        function setAsignatura($asignatura) {
            $this->asignatura = $asignatura;
        }

        function setAlumno($alumno) {
            $this->alumno = $alumno;
        }

//        function setId_asignatura($id_asignatura) {
//            $this->id_asignatura = $id_asignatura;
//        }
//
//        function setId_alumno($id_alumno) {
//            $this->id_alumno = $id_alumno;
//        }


}