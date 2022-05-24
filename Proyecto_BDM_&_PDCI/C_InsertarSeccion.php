<?php

include_once 'C_database.php';

class Seccion extends Database{

private $nombre;
private $color;
private $icono;

    function AgregarSeccion($nombre, $color,$icono){

    $query = $this->conectar()->query("CALL Agregar_Seccion('$nombre','$color','$icono');");
    echo'<script type="text/javascript">
    alert("Seccion guardada exitosamente");

    </script>';
    header("Location: Pagina_CrearSeccion.php");
    return $query;

    }

    
}

$nombre     = $_POST['NombreSeccion'];
$color      = $_POST['Color'];
$icono      = $_POST['Icon'];

$Regis = new Seccion();
$Regis->AgregarSeccion($nombre, $color, $icono);

?>