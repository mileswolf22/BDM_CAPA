<?php

include_once 'C_database.php';

class Comentario Extends Database{

private $idN;
private $usuario;
private $foto;
private $texto;
private $idC;


function modificar_comentario($idC, $texto){
    $query = $this->conectar()->query("CALL Modificar_Comentario('$idC', '$texto');");
    
     header("Location: Pagina_Noticia.php");
     
     return $query;
}

/*function mostrar_comentarios($idN){
$con=mysqli_connect('localhost','root','root','notidb');
$sql = "SELECT * FROM 'datos_comentario'"
$query_mostrar = "CALL Mostrar_Noticia_Completa('$temp')";
$result = mysqli_query ($con, $query_mostrar);
}*/

}

$commit = new Comentario();
$commmit ->modificar_comentario($idC, $texto);
?>