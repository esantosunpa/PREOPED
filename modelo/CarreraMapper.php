<?php

include_once 'BDMapper.php';
include_once '../modelo/Asignatura.class.php';

class CarreraMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "Carrera";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
    public function findAsignaturas($id){
        $this->query = "SELECT A.* "
                . "FROM Asignatura A, "
                    . "Carrera_Asignatura CA "
                . "WHERE A.id = CA.id_asignatura "
                    . "AND id_carrera =".$id;
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++){
            $this->asignaturas[] = new Asignatura($this->resultset->fetch_assoc());
        }
        return $this->asignaturas;
    }
    
}