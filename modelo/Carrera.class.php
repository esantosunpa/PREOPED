<?php
class Carrera{
    private $id;
    private $nombre;
    function __construct($array) {
        $this->id = $array[$id] ;
        $this->nombre = $array[$nombre];
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