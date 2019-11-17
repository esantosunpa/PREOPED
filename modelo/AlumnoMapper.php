<?php

include_once 'BDMapper.php';

class AlumnoMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Alumno";
        $this->nombreAtributoId = "id";
        
        parent::__construct();
        
    }

    public function findById($id) {
        return parent::findById($id);
    }

    
}

