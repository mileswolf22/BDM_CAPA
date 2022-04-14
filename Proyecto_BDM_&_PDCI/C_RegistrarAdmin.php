<?php

/*
session_start();
include_once 'C_AdminDAO.php';

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
        


$_SESSION['rolElegido'] = $_REQUEST['TipoAdmin'];




if($_SESSION['rolElegido'] == 'Editor (Reportero)'){
    $api = new RegistroAdmin();
    $api->Registro_Reportero($Usuario,$Password,$binariosImagen,$Nombre_completo,$Correo,$Numero_contacto,$FechaNacimiento);

}

if($_SESSION['rolElegido'] == 'Administrador'){
    $api = new RegistroAdmin();
    $api->Registro_Editor($Usuario,$Password,$binariosImagen,$Nombre_completo,$Correo,$Numero_contacto,$FechaNacimiento);

};

*/


session_start();
include_once 'C_AdminDAO.php';

 



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
            
    
    
    $_SESSION['rolElegido'] = $_REQUEST['TipoAdmin'];
    
    
    
    
    if($_SESSION['rolElegido'] == 'Editor (Reportero)'){
        $api = new RegistroAdmin();
        $api->Registro_Reportero($Usuario,$Password,$binariosImagen,$Nombre_completo,$Correo,$Numero_contacto,$FechaNacimiento);
    
    }
    
    if($_SESSION['rolElegido'] == 'Administrador'){
        $api = new RegistroAdmin();
        $api->Registro_Editor($Usuario,$Password,$binariosImagen,$Nombre_completo,$Correo,$Numero_contacto,$FechaNacimiento);
    
    };
    

    
		
		} else {
            

            header("Location: Pagina_RegistroUsuario.php");

            $_SESSION['SoyUnRobot'] = "SiEsRobot";

            die();
	}	



?>
