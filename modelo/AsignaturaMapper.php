<?php

include_once 'BDMapper.php';

class AsignaturaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Asignatura";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}