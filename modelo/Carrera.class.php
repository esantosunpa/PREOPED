<?php
include_once 'ModeloDatosGenerico.php';


class Carrera extends ModeloDatosGenerico{
    private $id;
    private $nombre;
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


}