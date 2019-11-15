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


