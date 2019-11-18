<?php

include_once 'BDMapper.php';

class EntrevistaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Entrevista";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
}