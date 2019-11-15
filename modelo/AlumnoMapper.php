<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'BDMapper.php';

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

