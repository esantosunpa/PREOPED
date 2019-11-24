<?php

$dir = 'BDMapper.php';



include_once $dir;
//echo $dir;

include_once '../modelo/Familiar.class.php';

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
}

