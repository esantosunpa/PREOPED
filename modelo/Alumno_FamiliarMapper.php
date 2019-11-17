<?php

include_once 'BDMapper.php';

class Alumno_FamiliarMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Familiar_Alumno";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}