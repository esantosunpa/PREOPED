<?php

class Familiar extends Persona {

    private $parentesco;
    function __construct($array) {
        $this->parentesco = $array["parentesco"];
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }

}
