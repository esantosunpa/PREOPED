<?php
include_once 'ModeloDatosGenerico.php';

class Entrevista extends ModeloDatosGenerico{
    private $id; 
    private $fecha;
    private $entrevistador;
    private $entrevistado;
    private $conclusiones;
    function __construct($array){
        parent::mapeoArrayAtributos($array);
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