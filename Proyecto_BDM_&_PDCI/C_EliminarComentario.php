<?php

include_once 'C_database.php';



class Comentario_ Extends Database{

private $idC;

function eliminar_comentario($idC){
    $query = $this->conectar()->query("CALL Eliminar_Comentario('$idC');");
    
     header("Location: Pagina_Noticia.php");
     
     return $query;
}

}
$idC = $_REQUEST['id'];

$commit = new Comentario_();
$commit ->eliminar_comentario($idC);
?>