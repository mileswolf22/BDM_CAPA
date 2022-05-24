<?php

include_once 'C_database.php';

class Eliminar extends Database{

private $usuario;
private $seccion;

function ElimUs($usuario){
    $query = $this->conectar()->query("CALL EliminarUsuario('$usuario');");
    header("Location: Pagina_SolicitudesDeBaja.php");
   
    return $query;
}

function ElimSec($seccion){
    $query = $this->conectar()->query("CALL EliminarSeccion('$seccion');");
    header("Location: Pagina_SolicitudesDeBaja.php");
            
    return $query;
}

}
$usuario = isset($_POST['user']) ? $_POST['user'] : '';
$seccion = isset($_POST['secc']) ? $_POST['secc'] : '';

$extend = new Eliminar();

   $varUsuario = (isset($_POST['ElimUs'])) ? $_POST['ElimUs'] : '';
   $varSecc = (isset($_POST['ElimSec'])) ? $_POST['ElimSec'] : ''; 

    if($varUsuario == "1"){
        if ($usuario != ''){

            $extend->ElimUs($usuario);
            
          }
    }

    else if($varSecc == "1"){
        if ($seccion != ''){

            $extend->ElimSec($seccion);
            
          }
    }
    
   

    

?>