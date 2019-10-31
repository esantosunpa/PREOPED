<?php

//No anda
class Familiar extends Persona {

    private $parentesco;
    function __construct($array) {
        $this->parentesco = $array["parentesco"];
        //parent::mapeoArrayAtributos($array); //?
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }
}

//$array["id"] = 1;
//echo "asd";
//$array["id"] = 1;

   

