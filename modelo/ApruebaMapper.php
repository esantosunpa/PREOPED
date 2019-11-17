<?php

include_once 'BDMapper.php';

class ApruebaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Aprueba";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}