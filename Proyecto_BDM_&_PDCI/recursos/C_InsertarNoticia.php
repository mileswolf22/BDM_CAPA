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

        $Lugar           = $_POST['Lugar'];
        $Fecha           = $_POST['FechaHora'];
        $Titulo          = $_POST['Titulo'];
        $Descripcion     = $_POST['Descripcion'];
        $Texto           = $_POST['Texto'];
        $Etiqueta        = $_POST['Etiqueta'];
        $SeccionP        = $_POST['EtiquetaPrincipal'];
        $SeccionS1       = $_POST['EtiquetaSecundaria1'];
        $SeccionS2       = $_POST['EtiquetaSecundaria2'];

        // Upload multiple image in Database using PHP MYSQL
if (!empty($_FILES['imagenPrevisualizacion']['name'])) {
    $multiplefile = $_FILES['imagenPrevisualizacion']['name'];
    foreach ($multiplefile as $name => $value) {
    $allowImg = array('png','jpeg','jpg','gif');
    $fileExnt = explode('.', $multiplefile[$name]);
    $fileTmp = $_FILES['imagenPrevisualizacion']['tmp_name'][$name];
    
    $newFile = rand(). '.'. $fileExnt[1];
    $target_dir = 'uploads/'.$newFile;

    if (in_array($fileExnt[1], $allowImg)) {

    if ($_FILES['imagenPrevisualizacion']['size'][$name] > 0 && $_FILES['imagenPrevisualizacion']['error'][$name]== 0) {

    if (move_uploaded_file($fileTmp, $target_dir)) {

    $query = $this->conectar()->query("CALL Agregar_Noticia('$Usuario','$Password','$binariosImagen','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
    //$query = $this->conectar()->query("CALL Agregar_video('$newFile');");
    //mysqli_query($con, $query);
    }

    }
    }
    }
    }


}

?>