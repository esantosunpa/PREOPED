<?php
class Alumno_Familiar{
    private $id;
    private $id_familiar;
    private $id_alumno; 
    
    function __construct($array) {
        $this->id = $array["id"];
        $this->id_familiar = $array["id_familiar"];
        $this->id_alumno = $array["id_alumno"];
    }

    
    function getId() {
        return $this->id;
    }

    function getId_familiar() {
        return $this->id_familiar;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_familiar($id_familiar) {
        $this->id_familiar = $id_familiar;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }
}

