<?php
include_once '../modelo/AlumnoMapper.php';

$mapperIdNoExistente = new AlumnoMapper();
$mapperIdExistente = new AlumnoMapper();

$resultadoIdExistente = $mapperIdExistente->findById(1);
var_dump($resultadoIdExistente);
$resultadoIdNoExistente = $mapperIdNoExistente->findById(-1);

var_dump($resultadoIdNoExistente);
