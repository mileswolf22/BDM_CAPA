<?php



include_once 'C_database.php';

class Registro extends Database{
    
    private  $Usuario;
    private  $Password;
    private  $Foto;
    private  $Nombre_completo;
    private  $Correo;
    private  $Numero_contacto;
    private  $FechaNacimiento;

  


    function Registro($Usuario, $Password, $binariosImagen, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento){
   
       
      
         

         $con=mysqli_connect('localhost','root','root','notidb');

         $binariosImagen=mysqli_escape_string($con, $binariosImagen);
        
        
        
        $query = $this->conectar()->query("CALL AgregarUsuario('$Usuario','$Password','$binariosImagen','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
        echo 'Se ha guardado el usuario en la BD';
        return $query;
    }
}	

    $Usuario         = $_POST['usuario'];
    $Password        = $_POST['contraseña'];
    
    $Nombre_completo = $_POST['nombre'];
    $Correo          = $_POST['correo'];
    $Numero_contacto = $_POST['numeroContacto'];
    $FechaNacimiento = $_POST['fecha-nacimiento'];

        $tipoarchivo=$_FILES['imagenPrevisualizacion']['name'];
       
       
         $nombrearchivo=$_FILES['imagenPrevisualizacion']['name'];
        
       
         $tamanoarchivo=$_FILES['imagenPrevisualizacion']['size'];
        
        
         $imagensubida=fopen($_FILES['imagenPrevisualizacion']['tmp_name'], 'r');
        
      
         $binariosImagen=fread($imagensubida, $tamanoarchivo);
/*
    echo $Usuario;
    echo $Password;
    echo $Foto;
    echo $Nombre_completo;
    echo $Correo;
    echo $Numero_contacto;
    echo $FechaNacimiento;
*/
    $Regis = new Registro();
    $Regis->Registro($Usuario, $Password, $binariosImagen, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento);


?>