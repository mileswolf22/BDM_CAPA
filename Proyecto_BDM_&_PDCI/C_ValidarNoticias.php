<?php
session_start();
include_once 'C_database.php';

class ValidarNoticias extends Database{

private $var1;
private $var2;
private $varAceptar;
private $varRechazar;
private $varRevisar;
private $varDevolver;

function AprobarNoticia($var1, $var2){
    $con=mysqli_connect('localhost','root','root','notidb');

     $query = $this->conectar()->query("CALL Aprobar_Noticia('$var1','$var2');");

     header("Location: Pagina_Noticia.php");
     echo "si pasa 1";

     return $query;
}

function DenegarNoticia($var1, $var2){
    $con=mysqli_connect('localhost','root','root','notidb');

     $query = $this->conectar()->query("CALL Denegar_Noticia('$var1','$var2');");
     header("Location: Pagina_Noticia.php");
     echo "si pasa 2";

     return $query;
}

function RevisionNoticia($var1, $var2){
    $con = mysqli_connect('localhost', 'root', 'root', 'notidb');

    $query = $this->conectar()->query("CALL Revisar_Noticia('$var1','$var2');");
    header("Location: Pagina_Noticia.php");
    echo "si pasa 3";

    return  $query;
}

function DevolverNoticia($var1, $var2){
    $query = $this->conectar()->query("CALL Devolver_Noticia('$var1','$var2');");
    header("Location: Pagina_Noticia.php");
    echo "si pasa 4";

    return $query;
}

}


$extend = new ValidarNoticias();

$var1=(isset($_POST['comment'])) ? $_POST['comment'] : '';

$var2=$_SESSION['id'];


$varAceptar = (isset($_POST['Aceptar'])) ? $_POST['Aceptar'] : '';
            if($varAceptar  == "1")
            {
             $extend -> AprobarNoticia($var1, $var2);
            } 


$varRechazar = (isset($_POST['Rechazar'])) ? $_POST['Rechazar'] : '';
            if($varRechazar == "1")
            {
             $extend -> DenegarNoticia($var1, $var2);
            }           

$varRevisar = (isset($_POST['Revisar'])) ? $_POST['Revisar'] : '';
            if($varRevisar  == "1")
            {
             $extend -> RevisionNoticia($var1, $var2);
            } 

$varDevolver = (isset($_POST['Devolver'])) ? $_POST['Devolver'] : '';
            if($varDevolver == "1")
            {
             $extend -> DevolverNoticia($var1, $var2);
            } 
?>