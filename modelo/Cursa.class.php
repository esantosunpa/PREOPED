<?php
include_once 'ModeloDatosGenerico.php';

class Cursa extends ModeloDatosGenerico{
	protected $id;
	protected $periodo;
	protected $anio;
	protected $evaluacion;
	protected $id_asignatura;
        protected $asignatura;
	protected $id_alumno;
        protected $alumno;
        
        function __construct($array) {
            parent::mapeoArrayAtributos($array);
        }

        function getId() {
            return $this->id;
        }

        function getPeriodo() {
            return $this->periodo;
        }

        function getAnio() {
            return $this->anio;
        }

        function getEvaluacion() {
            return $this->evaluacion;
        }

        function getAsignatura() {
            return $this->asignatura;
        }

        function getId_alumno() {
            return $this->id_alumno;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setPeriodo($periodo) {
            $this->periodo = $periodo;
        }

        function setAnio($anio) {
            $this->anio = $anio;
        }

        function setEvaluacion($evaluacion) {
            $this->evaluacion = $evaluacion;
        }

        function setAsignatura($asignatura) {
            $this->asignatura = $asignatura;
        }

        function setId_alumno($id_alumno) {
            $this->id_alumno = $id_alumno;
        }

        function getAlumno() {
            return $this->alumno;
        }

        function setAlumno($alumno) {
            $this->alumno = $alumno;
        }


}
