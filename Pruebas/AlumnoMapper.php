<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/AlumnoMapper.php';

$AlumnoMapper = new AlumnoMapper();

/* Pruebas realizadas */
/* 1. Instanciar objeto existente en la base. Debe funcionar. */
$AlumnoExistente = $AlumnoMapper->findById(2);

/* 2. Instanciar objeto no existente en la base. Debe arrojar error. */
$AlumnoNoExistente = $AlumnoMapper->findById(-1);

/* 3. Relacionar un alumno
