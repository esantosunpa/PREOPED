<?php
include_once 'ModeloDatosGenerico.php';

class Carrera_Asignatura extends ModeloDatosGenerico{
    protected $id;
    protected $asignatura;
    protected $carrera;
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getAsignatura() {
        return $this->asignatura;
    }

    function getCarrera() {
        return $this->carrera;
    }

    function setAsignatura($asignatura) {
        $this->asignatura = $asignatura;
    }

    function setCarrera($carrera) {
        $this->carrera = $carrera;
    }


}