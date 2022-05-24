<?php
include_once 'C_database.php';
include_once 'C_GenReporteSeccion.php';

$extends = new GenRepo(); 

$eleccion = $_REQUEST['RepoOpciones'];


if($eleccion == 1){

    $extends -> GenRepo1();

}

if($eleccion == 2){

    $extends -> GenRepo2();

}

if($eleccion == 3){

    $extends -> GenRepo3();

}


?>