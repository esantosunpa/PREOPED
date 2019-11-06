<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'ModeloDatosGenerico.php';

class Alumno_Diagnostico extends ModeloDatosGenerico{
    protected $id;
    //private $id_diagostico;
    protected $diagnostico;
    //private $id_alumno;
    protected $alumno;
    protected $profesional_diagnostico;
    
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    
    function getId() {
        return $this->id;
    }

    function getProfesional_diagnostico() {
        return $this->profesional_diagnostico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProfesional_diagnostico($profesional_diagnostico) {
        $this->profesional_diagnostico = $profesional_diagnostico;
    }

    function getDiagnostico() {
        return $this->diagnostico;
    }

    function getAlumno() {
        return $this->alumno;
    }

    function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    function setAlumno($alumno) {
        $this->alumno = $alumno;
    }


}

