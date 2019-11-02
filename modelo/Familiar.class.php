<?php

include_once 'Persona.class.php';

class Familiar extends Persona {

    protected $parentesco;
    function __construct($array) {
        parent::mapeoArrayAtributos($array); //?
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }
}

$array["id"] = 1;
$array["nombre"] = "Familiar";
$array["parentesco"] = "padre";

$P1 = new Familiar($array);
var_dump($P1);

   

