<?php

$dir = 'BDMapper.php';



include_once $dir;
//echo $dir;

include_once '../modelo/Familiar.class.php';
include_once '../modelo/Diagnostico.class.php';

class AlumnoMapper extends BDMapper{
    /**
     * @var Familiar
     */
    protected $familiares; 
    
    public function __construct() {
        $this->nombreTabla = "Alumno";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    // Necesario? Ya hereda la funcion de su superclase
    public function findById($id) {
        return parent::findById($id);
    }

    public function findFamiliares($id){
        $this->query = "SELECT F.* "
                . "FROM Familiar F, "
                    . "Familiar_Alumno AF "
                . "WHERE F.id = AF.id_familiar "
                    . "AND id_alumno =".$id;
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++){
            $this->familiares[] = new Familiar($this->resultset->fetch_assoc());
        }
        return $this->familiares;
    }
    
    public function findDiagnosticos($id){
        $this->query = "SELECT D.* "
                . "FROM Diagnostico D, "
                    . "Alumno_Diagnostico AD "
                . "WHERE D.id = AD.id_diagnostico "
                    . "AND id_alumno =".$id;
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++){
            $this->diagnosticos[] = new Diagnostico($this->resultset->fetch_assoc());
        }
        return $this->diagnosticos;
    }
}

