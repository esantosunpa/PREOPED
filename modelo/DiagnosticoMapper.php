<?php

include_once 'BDMapper.php';

class DiagnosticoMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Diagnostico";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }
}