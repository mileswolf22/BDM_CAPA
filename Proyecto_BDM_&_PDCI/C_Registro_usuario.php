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

    public $query; 

    function Registro($Usuario, $Password, $Foto, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento){
        
        $query = $this->conectar()->query("CALL AgregarUsuario('$Usuario','$Password','$Foto','$Nombre_completo','$Correo','$Numero_contacto','$FechaNacimiento');");
        echo 'Se ha guardado el usuario en la BD';
        return $query;
    }
}	

    $Usuario         = $_POST['usuario'];
    $Passowrd        = $_POST['contraseña'];
    $Foto            = $_POST['imagenPrevisualizacion01'];
    $Nombre_completo = $_POST['nombre'];
    $Correo          = $_POST['correo'];
    $Numero_contacto = $_POST['numeroContacto'];
    $FechaNacimiento = $_POST['fecha-nacimiento'];

    /*echo $Usuario;
    echo $Password;
    echo $Foto;
    echo $Nombre_completo;
    echo $Correo;
    echo $Numero_contacto;
    echo $FechaNacimiento;*/

    $Regis = new Registro();
    $Regis->Registro($Usuario, $Passowrd, $Foto, $Nombre_completo, $Correo, $Numero_contacto, $FechaNacimiento);


?>