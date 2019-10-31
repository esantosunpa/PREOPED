<?php
class Alumno_Diagnostico{
    private $id;
    private $id_diagostico;
    private $id_alumno;
    private $profesional_diagnostico;
    
    function __construct($array) {
        $this->id = $array["id"];
        $this->id_diagostico = $array["id_diagnostico"];
        $this->id_alumno = $array["id_alumno"];
        $this->profesional_diagnostico = $array["profesional_diagnostico"];
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