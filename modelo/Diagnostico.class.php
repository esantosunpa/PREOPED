<?php
class Diagnostico{
    private $id;
    private $diagnostico;
    private $tipo_discapacidad; 
    private $descripcion; 

    function __construct($array){
        $this->id = $array["id"];
        $this->diagnostico = $array["diagnostico"];
        $this->tipo_discapacidadid = $array["tipo_discapacidad"];
        $this->descripcion = $array["descripcion"];
    }
    
    function getId() {
        return $this->id;
    }

    function getDiagnostico() {
        return $this->diagnostico;
    }

    function getTipo_discapacidad() {
        return $this->tipo_discapacidad;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    function setTipo_discapacidad($tipo_discapacidad) {
        $this->tipo_discapacidad = $tipo_discapacidad;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}