<?php
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

?>
