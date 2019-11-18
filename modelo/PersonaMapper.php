<?php

include_once 'BDMapper.php';

class PersonaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Persona";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}