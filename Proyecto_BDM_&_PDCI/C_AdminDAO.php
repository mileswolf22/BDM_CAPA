<?php
include_once 'C_database.php';
session_start();

class RegistroAdmin extends Database {


    function Registro_Editor($Usuario,$Password,$binariosImagen,$Nombre_completo,$Correo,$Numero_contacto,$FechaNacimiento){
       
        $con=mysqli_connect('localhost','root','root','notidb');
   
        $binariosImagen=mysqli_escape_string($con, $binariosImagen);
        

        $query = $this->conectar()->query("CALL Agregar_Editor('$Usuario','$Password','$binariosImagen','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
        echo'<script type="text/javascript">
        alert("El usuario ha sido registrado");

        </script>';
    header("Location: Pagina_DashboardAdmin.php");
        return $query;


    }


    function Registro_Reportero($Usuario,$Password,$binariosImagen,$Nombre_completo,$Correo,$Numero_contacto,$FechaNacimiento){

        $con=mysqli_connect('localhost','root','root','notidb');

         $binariosImagen=mysqli_escape_string($con, $binariosImagen);

        
        
        $query = $this->conectar()->query("CALL Agregar_Periodista('$Usuario','$Password','$binariosImagen','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
        echo'<script type="text/javascript">
        alert("El usuario ha sido registrado");

        </script>';
    header("Location: Pagina_DashboardAdmin.php");
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
if($_SESSION['rolElegido'] == 'Editor (Reportero)'){
    $Regis = new RegistroAdmin();
    $Regis->Registro_Reportero($Usuario, $Password, $binariosImagen, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento);
}

if($_SESSION['rolElegido'] == 'Administrador'){
    $Regis = new RegistroAdmin();
    $Regis->Registro_Editor($Usuario, $Password, $binariosImagen, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento);
}

?>