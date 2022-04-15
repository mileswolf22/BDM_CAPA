<?php

include_once 'C_database.php';

class RegistroNoticia extends Database{

    private  $Lugar;
    private  $Fecha;
    private  $Titulo;
    private  $Descripcion;
    private  $Texto;
    private  $Etiqueta;
    private  $SeccionP;
    private  $SeccionS1;
    private  $SeccionS2;
    private $_FILES['img']['name'];
    private $_FILES['vid']['name'];

    function RegistroNoti(){

        $con=mysqli_connect('localhost','root','root','notidb');
        $binariosImagen=mysqli_escape_string($con, $binariosImagen);

        
    }

}

?>