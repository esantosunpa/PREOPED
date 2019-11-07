<?php
include_once 'ModeloDatosGenerico.php';
include_once 'Carrera_Asignatura.php';


class Carrera extends ModeloDatosGenerico{
    protected $id;
    protected $nombre;
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function createCarrera_Asignatura($Asignatura){
        $arrayCA["carrera"] = $this;
        $arrayCA["asignatura"] = $Asignatura;
        $C_A = new Carrera_Asignatura($arrayCA);
        return $C_A;
    }

}