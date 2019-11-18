<?php

include_once 'BDMapper.php';

class Entrevista_AlumnoMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Entrevista_Alumno";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}