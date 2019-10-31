<?php
include_once 'ModeloDatosGenerico.php';

class Carrera_Asignatura extends ModeloDatosGenerico{
    private $id;
    private $id_asignatura;
    private $id_carrera;
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getId() {
        return $this->id;
    }

    function getId_asignatura() {
        return $this->id_asignatura;
    }

    function getId_carrera() {
        return $this->id_carrera;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_asignatura($id_asignatura) {
        $this->id_asignatura = $id_asignatura;
    }

    function setId_carrera($id_carrera) {
        $this->id_carrera = $id_carrera;
    }


}