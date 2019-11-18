<?php

include_once 'BDMapper.php';

class FamiliarMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Familiar";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}