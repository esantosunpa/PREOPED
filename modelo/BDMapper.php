<?php

include_once 'BDConexion.php';

class BDMapper {
    /**
     * ?
     * @param type $tabla
     * @param type $campos
     * @param type $valores
     */

    /**
     *
     * @var mysqli_result
     */
    protected $resultset;

    /**
     *
     * @var type 
     */
    protected $query;
    protected $id;
    protected $nombreTabla;
    protected $nombreAtributoId;

    /**
     *
     * @var BDconexion
     */
    protected $bdconexion;

    function __construct() {
        $this->bdconexion = new BDConexion();
    }

    /**
     * 
     * @param int $id
     * @return type
     */
    function findById($id) {
        //$this->query = "SELECT * FROM {$this->nombreTabla} WHERE {$this->nombreAtributo}=$id ";
        $this->query = "SELECT * FROM " . $this->nombreTabla . " WHERE " . $this->nombreAtributoId . "=" . $id;
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset->fetch_assoc();
    }
    
    
    
    
    

    static function Create($tabla, $campos, $valores) {
        $query = "INSERT INTO $tabla ($campos) VALUES ($valores)";
        $mysqli->query($query);
    }

    static function Read($tabla, $campos) {
        $query = "SELECT $campos FROM $tabla";
        $result = $mysqli->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }

    static function ReadIf($tabla, $campos, $condicion) {
        $query = "SELECT $campos FROM $tabla WHERE $condicion";
        $result = $mysqli->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }

    static function Update($tabla, $mods, $condicion) {
        $query = "UPDATE $tabla set $mods WHERE $condicion";
        $mysqli->query($query);
    }

    static function Delete($tabla, $condicion) {
        $query = "DELETE FORM $tabla WHERE $condicion";
        $mysqli->query($query);
    }

    static function DeleteDANGER($tabla) {
        $query = "DELETE FORM $tabla";
        $mysqli->query($query);
    }

}
