<?php

$dir = 'BDMapper.php';

include_once $dir;
//echo $dir;

class AlumnoMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Alumno";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
}

