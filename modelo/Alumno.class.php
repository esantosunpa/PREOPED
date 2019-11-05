<?php
// Crear colecciones de las relaciones, 1 a 1 (objeto), 1 a n (array), n a m (clase)
// metodos, en constructor? add? set?
// hecho: alumno: asignatura, diagnostico
// 
// Para mostrar los errores

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Persona.class.php';


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

//    function getCursa() {
//        foreach ($this->cursa as $c) {
//            echo $c->getAsignatura()->getNombre();
//        }
//    }
//
//    function addCursa($cursa) {
//        $this->cursa[] = $cursa;
//    }
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
    
//    function getAlumno_diagnostico() {
//        //return $this->alumno_diagnostico;
//    }
//    function addAlumno_diagnostico($a_l) {
//        $this->alumno_diagnostico[] = $a_l;
//    }
}

//Prueba relacion Cursa
include_once 'Asignatura.class.php';
include_once 'Cursa.class.php';

$alumnoArray["nombre"] = "Alumno";
$A1 = new Alumno($alumnoArray);
$cursaArray["alumno"] = $A1;
$arrayAsig["nombre"] = "Asignatura1";
$cursaArray["asignatura"] = new Asignatura($arrayAsig);
$C1 = new Cursa($cursaArray);
var_dump($C1);
echo $C1->getAlumno()->getNombre();
echo $C1->getAsignatura()->getNombre();

include_once 'Diagnostico.class.php';
include_once 'Alumno_Diagnostico.class.php';

$aDiag["diagnostico"] = "diagnostico1";
$D1 = new Diagnostico($aDiag);
$aA_D["diagnostico"] = $D1;
$aA_D["alumno"] = $A1;
$A_D1 = new Alumno_Diagnostico($aA_D);
var_dump($A_D1);

