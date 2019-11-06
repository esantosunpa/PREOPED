<?php

include_once 'Persona.class.php';
include_once 'Alumno_Diagnostico.class.php';

class Alumno extends Persona {

    protected $anio_ingreso;
    protected $cud;

//    protected $cursa;
//    protected $alumno_diagnostico;

    /**
     * 
     * @param Array $array
     */
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getAnio_ingreso() {
        return $this->anio_ingreso;
    }

    function getCud() {
        return $this->cud;
    }

    function setAnio_ingreso($anio_ingreso) {
        $this->anio_ingreso = $anio_ingreso;
    }

    function setCud($cud) {
        $this->cud = $cud;
    }

    //Agregar objeto ALumno_Familiar en array en Alumno o Familiar?
    function createAlumno_Familiar($familiar) {
        $arrayA_F["familiar"] = $familiar;
        $arrayA_F["alumno"] = $this;
        $A_F = new Alumno_Familiar($arrayA_F);
//      O Usar sets?
//      $A_F->setAlumno($this);
//      $A_F->setFamiliar($familiar);
        return $A_F;
    }
    
    function createAlumno_Diagnostico($diagnostico){
        $arrayA_D["alumno"] = $this;
        $arrayA_D["diagnostico"] = $diagnostico;
        $A_D = new Alumno_Diagnostico($arrayA_D);
        return $A_D;
    }

//    function getAlumno_diagnostico() {
//        //return $this->alumno_diagnostico;
//    }

//    function addAlumno_diagnostico($a_l) {
//        $this->alumno_diagnostico[] = $a_l;
//    }

}



