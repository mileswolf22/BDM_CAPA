<?php

include_once 'C_database.php';

class Eliminar extends Database{
  
    private $nombre;

    function EliminarSeccion($nombre){
        $query = $this->conectar()->query("CALL Eliminar_Seccion('$nombre');");
    
    header("Location: Pagina_EliminarSeccion.php");
    return $query;
    }
    
}

$nombre = $_POST['menuEtiquetas'];

$Regis = new Eliminar();
$Regis->EliminarSeccion($nombre);

?>