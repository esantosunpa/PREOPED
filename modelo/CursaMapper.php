<?php

include_once 'BDMapper.php';

class CursaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Cursa";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}