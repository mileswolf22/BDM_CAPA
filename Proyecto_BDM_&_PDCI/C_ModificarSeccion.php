<?php

include_once 'C_database.php';

class Seccion extends Database{

private $nombre;
private $color;
private $icono;



    function ModificarSeccion($nombre, $color, $icono){
        $query = $this->conectar()->query("CALL Modificar_Seccion('$nombre','$color','$icono');");
        echo'<script type="text/javascript">
        alert("Seccion guardada exitosamente");
    
        </script>';
        header("Location: Pagina_ModificarSeccion.php");
        return $query;
    }
    
}

$nombre     = $_REQUEST['Etiqueta'];
$color      = $_POST['Color'];
$icono      = $_POST['Icon'];

$Regis = new Seccion();
$Regis->ModificarSeccion($nombre, $color, $icono);

?>