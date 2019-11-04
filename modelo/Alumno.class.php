<?php
// Crear colecciones de las relaciones, 1 a 1 (objeto), 1 a n (array), n a m (clase)
// metodos, en constructor? add? set?
// Para mostrar los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Persona.class.php';
include_once 'Cursa.class.php';

class Alumno extends Persona {

    protected $anio_ingreso;
    protected $cud;
    /**
     *
     * @var Array 
     */
    protected $cursa;
    /**
     * 
     * @param Array $array
     */
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getCursa() {
        foreach ($cursa as $c) {
            echo $c->getNombre();
        }
    }

    function addCursa($cursa) {
        $this->cursa[] = $cursa;
    }

    function setAsignaturas($cursa) {
        $this->cursa = $cursa;
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

}

include_once 'Asignatura.class.php';

$array["id"] = 1;
$array["nombre"] = "Alumno";
$array["anio_ingreso"] = "2019";
$array["url"] = "www.uarg.unpa.edu.ar";
$arrayCursa["anio"] = "2019";
$A1 = new Cursa($arrayCursa);
$arrayCursa["anio"] = "2020";
$arrayAsig["nombre"] ="Asignatura1";
$Asg1 = new Asignatura($arrayAsig);
$arrayCursa["asignatura"] = $Asg1;
$A2 = new Cursa($arrayCursa);
$P1 = new Alumno($array);
$P1->addCursa($A1);
$P1->addCursa($A2);
var_dump($P1);
//echo $P1->$url;
//echo $P1->getNombre();
//echo $P1->getCud();

