<?php
class Entrevista_Alumno{
    private $id;
    private $id_entrevista;
    private $id_alumno; 

    function __construct($array){
        $this->id = $array["id"];
        $this->id_entrevista = $array["id_entrevista"];
        $this->id_alumno = $array["id_alumno"];
    }
    
    function getId() {
        return $this->id;
    }

    function getId_entrevista() {
        return $this->id_entrevista;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_entrevista($id_entrevista) {
        $this->id_entrevista = $id_entrevista;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }


}