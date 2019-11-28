<?php

class ModeloDatosGenerico {

    function mapeoArrayAtributos($array) {
        foreach ($array as $atributo => $valor) {
            if (property_exists($this, $atributo)) {
                $this->{$atributo} = $valor;
            }
        }
    }

}
