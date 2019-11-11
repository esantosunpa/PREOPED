<?php
Class BDConexion extends msqli {
    
    public function __contruct() {
        parent::__contruct(BDConfig::HOST, BDConfig::USUARIO, BDConfig::PASS, BDConfig::SCHEMA);
        if ($this -> connect_error) {
            
            echo 'oh no :(';
            
        }
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

