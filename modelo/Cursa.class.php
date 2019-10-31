<?php
class Cursa{
	private $id;
	private $periodo;
	private $anio;
	private $evaluacion;
	private $id_asignatura;
	private $id_alumno;
        function __construct($array) {
            $this->id = $id;
            $this->periodo = $periodo;
            $this->anio = $anio;
            $this->evaluacion = $evaluacion;
            $this->id_asignatura = $id_asignatura;
            $this->id_alumno = $id_alumno;
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

        function getId_asignatura() {
            return $this->id_asignatura;
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

        function setId_asignatura($id_asignatura) {
            $this->id_asignatura = $id_asignatura;
        }

        function setId_alumno($id_alumno) {
            $this->id_alumno = $id_alumno;
        }

        
}
