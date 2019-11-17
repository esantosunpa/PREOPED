<?php

include_once 'BDMapper.php';

class Alumno_DiagnosticoMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Alumno_Diagnostico";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}
