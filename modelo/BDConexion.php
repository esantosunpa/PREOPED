<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'BDConfig.php';

Class BDConexion extends mysqli {
    
    public function __construct() {
        parent::__construct(BDConfig::HOST, BDConfig::USUARIO, BDConfig::PASS, BDConfig::SCHEMA);
        if ($this->connect_error) { 
            echo 'oh no :(';
        }
    }
}
//$BDC = new BDConexion();
//$query = "SELECT id,nombre FROM Asignatura";
//$result = $BDC->query($query);
//$row = $result->fetch_array(MYSQLI_ASSOC); // NUM busca por id, ASSOC busca por nombre del campo, BOTH por ambas
//printf("%s %s  ", $row["id"],$row["nombre"]);

