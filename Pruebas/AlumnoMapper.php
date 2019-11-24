<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/AlumnoMapper.php';

$AMaper = new AlumnoMapper();

//Prueba con resultado esperado = DATOS
$AlumnoValido = $AMaper->findById(1);

//Prueba con resultado esperado = NULL
$resultadoAlumnoNoExistente = $AMaper->findById(-1);


$familiares = $AMaper->findFamiliares(1);
var_dump($familiares);

