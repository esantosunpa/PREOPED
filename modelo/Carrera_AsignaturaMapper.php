<?php

include_once 'BDMapper.php';

class Carrera_AsignaturaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Carrera_Asignatura";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}