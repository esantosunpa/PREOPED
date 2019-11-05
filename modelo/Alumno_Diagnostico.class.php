<?php
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

    function getId_diagostico() {
        return $this->id_diagostico;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function getProfesional_diagnostico() {
        return $this->profesional_diagnostico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_diagostico($id_diagostico) {
        $this->id_diagostico = $id_diagostico;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    function setProfesional_diagnostico($profesional_diagnostico) {
        $this->profesional_diagnostico = $profesional_diagnostico;
    }


}