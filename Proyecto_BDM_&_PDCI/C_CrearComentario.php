<?php

include_once 'C_database.php';
session_start();

class Comentario Extends Database{

private $idN;
private $usuario;

private $texto;
private $idC;



function crear_comentario($idN, $usuario, $texto){

     $con=mysqli_connect('localhost','root','root','notidb');
     $query = $this->conectar()->query("CALL Agregar_Comentario('$idN','$usuario', '$texto');");
    
     header("Location: Pagina_Noticia.php");
     
     return $query;
}


/*function mostrar_comentarios($idN){
$con=mysqli_connect('localhost','root','root','notidb');
$sql = "SELECT * FROM 'datos_comentario'"
$query_mostrar = "CALL Mostrar_Noticia_Completa('$temp')";
$result = mysqli_query ($con, $query_mostrar);
}*/

};


$idN     = $_POST['idN'];
$usuario = $_POST['UserS'];

$texto   = $_POST['texto'];


$commit = new Comentario();
$commit ->crear_comentario($idN, $usuario, $texto);
?>