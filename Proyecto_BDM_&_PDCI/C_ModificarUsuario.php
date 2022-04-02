<?php
include_once 'C_database.php';

class Modificar extends Database{
    private  $Usuario;
    private  $Password;
    private  $Foto;
    private  $Nombre_completo;
    private  $Correo;
    private  $Numero_contacto;
    private  $FechaNacimiento;

     function Modificar_US($Usuario, $Nombre_completo, $Numero_contacto, $FechaNacimiento, $Correo, $Password){
  
         $con=mysqli_connect('localhost','root','root','notidb');
 
    $query = $this->conectar()->query("CALL Modificar_Usuario('$Usuario','$Nombre_completo', '$Numero_contacto', '$FechaNacimiento', '$Correo', '$Password');");
    echo'<script type="text/javascript">
    alert("El usuario ha sido modificadoS");

    </script>';
    header("Location: Pagina_PerfilUsuario.php");
        return $query;
    }
}	

    $Usuario         = $_POST['usuario'];
    $Password        = $_POST['contraseña'];
    $Nombre_completo = $_POST['nombre'];
    $Correo          = $_POST['correo'];
    $Numero_contacto = $_POST['numeroContacto'];
    $FechaNacimiento = $_POST['fecha-nacimiento'];

        /*$tipoarchivo=$_FILES['imagenPrevisualizacion']['name'];
       
       
         $nombrearchivo=$_FILES['imagenPrevisualizacion']['name'];
        
       
         $tamanoarchivo=$_FILES['imagenPrevisualizacion']['size'];
        
        
         $imagensubida=fopen($_FILES['imagenPrevisualizacion']['tmp_name'], 'r');
        
      
         $binariosImagen=fread($imagensubida, $tamanoarchivo);*/
/*
    echo $Usuario;
    echo $Password;
    echo $Foto;
    echo $Nombre_completo;
    echo $Correo;
    echo $Numero_contacto;
    echo $FechaNacimiento;
*/
    $Modif = new Modificar();
    $Modif->Modificar_US($Usuario, $Nombre_completo, $Numero_contacto, $FechaNacimiento, $Correo, $Password);


?>