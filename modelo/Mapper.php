<?php

include_once 'BDConexion.php';

class Mapper {
    
    protected $query;
    /**
     *
     * @var mysqli_result $resultset
     */
    protected $resultset; 
    protected $nombreTabla;
    protected $nombreId;
    /**
     *
     * @var BDConexion
     */
    protected $BDConexion;

    /**
     * 
     * @param int $id
     */
    
    function __construct(){
        $this->BDConexion = new BDConexion();
    }


    function findById($id){
        
        $this->query = "SELECT * FROM " . $this->nombreTabla . " WHERE " . $this->nombreId . " = " . $id;
        
        $this->resultset = $this->BDConexion->query($this->query);
        return $this->resultset->fetch_assoc();
        
    }
    static function Create($tabla, $campos, $valores){
        $query = "INSERT INTO $tabla ($campos) VALUES ($valores)";
        $mysqli->query($query);
    }
    static function Read($tabla, $campos){
        $query = "SELECT $campos FROM $tabla";
        $result = $mysqli->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC); 
        return $row;
    }
     static function ReadIf($tabla, $campos, $condicion){
        $query = "SELECT $campos FROM $tabla WHERE $condicion";
        $result = $mysqli->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC); 
        return $row;
    }
      static function Update($tabla, $mods, $condicion){
        $query = "UPDATE $tabla set $mods WHERE $condicion";
        $mysqli->query($query);
    }
    static function Delete($tabla, $condicion){
        $query = "DELETE FORM $tabla WHERE $condicion";
        $mysqli->query($query);
    }
    static function DeleteDANGER($tabla){
        $query = "DELETE FORM $tabla";
        $mysqli->query($query);
    }
    
}