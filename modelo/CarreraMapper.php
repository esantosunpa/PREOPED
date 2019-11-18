<?php

include_once 'BDMapper.php';

class CarreraMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Carrera";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}