<?php

/*
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
        echo'<script type="text/javascript">
        alert("El usuario ha sido registrado");

        </script>';
    header("Location: Pagina_IniciarSesion.php");
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

    $Regis = new Registro();
    $Regis->Registro($Usuario, $Password, $binariosImagen, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento);

*/


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
        echo'<script type="text/javascript">
        alert("El usuario ha sido registrado");

        </script>';
    header("Location: Pagina_IniciarSesion.php");
        return $query;
    }
}	


session_start();

	define('CLAVE', '6Lc9y2cfAAAAAPhxGRjdQ4ivVgcd6D3F305w98xd');
	
  
        $token = $_POST['recaptchaResponse'];

	
	$cu = curl_init();
	curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($cu, CURLOPT_POST, 1);
	curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
	curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($cu);
	curl_close($cu);
	
	$datos = json_decode($response, true);
	
	
	if($datos['success'] == 1 && $datos['score'] >= 0.5){
		
        $_SESSION['SoyUnRobot'] = "NoEsRobot";

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
    
        $Regis = new Registro();
        $Regis->Registro($Usuario, $Password, $binariosImagen, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento);
    
		
		} else {
            

            header("Location: Pagina_RegistroUsuario.php");

            $_SESSION['SoyUnRobot'] = "SiEsRobot";

            die();
	}	

?>