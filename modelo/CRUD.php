<?php

class CRUD {
    
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