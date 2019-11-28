<?php

include_once 'BDMapper.php';
include_once '../modelo/Alumno.class.php';

class EntrevistaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Entrevista";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
    public function findAlumnos($id){
        $this->query = "SELECT A.* "
                . "FROM Alumno A, "
                    . "Entrevista_Alumno EA "
                . "WHERE A.id = EA.id_alumno "
                    . "AND id_entrevista =".$id;
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++){
            $this->alumnos[] = new Alumno($this->resultset->fetch_assoc());
        }
        return $this->alumnos;
    }
}