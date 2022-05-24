<?php

include_once 'C_database.php';

class ModificarNoti extends Database{

    private  $key;
    private  $Autor;
    private  $Lugar;
    private  $Fecha;
    private  $Titulo;
    private  $Descripcion; 
    private  $Texto;
    private  $Etiqueta;
    private  $SeccionP;
    private  $SeccionS1;
  

function ModiNoti($key, $Autor, $Lugar, $Fecha, $Titulo, $Descripcion, $Texto, $Etiqueta, $SeccionP, $SeccionS1){

    $query = $this->conectar()->query("CALL Modificar_Noticia('$key','$Autor','$Lugar', '$Fecha', '$Titulo', '$Descripcion', '$Texto', '$Etiqueta', '$SeccionP', '$SeccionS1');");
            //$query = $this->conectar()->query("CALL Agregar_video('$newFile');");
            //mysqli_query($con, $query);
            
            header("Location: Pagina_ModificarNoticia.php");
            return $query;
}

}

$key            =(isset($_POST['Key'])) ? $_POST['Key'] : '';
$Autor          =(isset($_POST['Autor'])) ? $_POST['Autor'] : '';
$Lugar          =$_POST['Lugar'];
$Fecha          =$_POST['FechaHora'];
$Titulo         =$_POST['Titulo'];
$Descripcion    =$_POST['descripcion'];
$Texto          =$_POST['texto'];
$Etiqueta       =$_POST['Etiqueta'];
$SeccionP       =$_POST['menuSeccion'];
$SeccionS1      =$_POST['menuSecundario'];

$Regis = new ModificarNoti();
$Regis->ModiNoti($key, $Autor, $Lugar, $Fecha, $Titulo, $Descripcion, $Texto, $Etiqueta, $SeccionP, $SeccionS1);

?>