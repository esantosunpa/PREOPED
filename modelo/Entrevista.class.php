<?php
class Entrevista{
    private $id; 
    private $fecha;
    private $entrevistador;
    private $entrevistado;
    private $conclusiones;
    function __construct($array){
        $this->id = $array["id"];
        $this->fecha = $array["fecha"];
        $this->entrevistador = $array["entrevistador"];
        $this->entrevistado = $array["entrevistado"];
        $this->conclusiones = $array["conclusiones"];
    }
    
    function getId() {
        return $this->id;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getEntrevistador() {
        return $this->entrevistador;
    }

    function getEntrevistado() {
        return $this->entrevistado;
    }

    function getConclusiones() {
        return $this->conclusiones;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setEntrevistador($entrevistador) {
        $this->entrevistador = $entrevistador;
    }

    function setEntrevistado($entrevistado) {
        $this->entrevistado = $entrevistado;
    }

    function setConclusiones($conclusiones) {
        $this->conclusiones = $conclusiones;
    }


}
$array["id"] = 1;
$array["fecha"] = "Eder";

$P1 = new Entrevista($array);
var_dump($P1);