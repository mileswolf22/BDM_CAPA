<?php
include_once 'C_database.php';

class foto extends Database{

    private  $Usuario;
    private  $Foto;

    function Modificar_F($Usuario, $binariosImagen){

        $con=mysqli_connect('localhost','root','root','notidb');

        $binariosImagen=mysqli_escape_string($con, $binariosImagen);

   $query = $this->conectar()->query("CALL Modificar_foto('$Usuario','$binariosImagen');");
   echo'<script type="text/javascript">
        alert("La imagen ha sido modificada");

        </script>';
    header("Location: Pagina_PerfilUsuario.php");
       return $query;
   }
}	

$Usuario         = $_POST['usuario'];

$tipoarchivo=$_FILES['imagenPrevisualizacion']['name'];
       
       
         $nombrearchivo=$_FILES['imagenPrevisualizacion']['name'];
        
       
         $tamanoarchivo=$_FILES['imagenPrevisualizacion']['size'];
        
        
         $imagensubida=fopen($_FILES['imagenPrevisualizacion']['tmp_name'], 'r');
        
      
         $binariosImagen=fread($imagensubida, $tamanoarchivo);

    $Modif = new foto();
    $Modif->Modificar_F($Usuario, $binariosImagen);

?>