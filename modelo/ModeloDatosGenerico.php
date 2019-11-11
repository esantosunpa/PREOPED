<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ModeloDatosGenerico {

    function mapeoArrayAtributos($array) {
        foreach ($array as $atributo => $valor) {
            if (property_exists($this, $atributo)) {
                $this->{$atributo} = $valor;
            }
        }
    }

}
