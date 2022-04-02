<?php
session_start():
include_once 'C_database.php';

class Mostrar extends Database{

    function mostrar_usuario($user){

    $query = $this->conectar()->query("CALL Mostrar_Usuario('$User');");
    return $query;
    
    $result = mysql_query($query);

    while($row = mysql_fetch_array($result))
  {
    $_SESSION['nom_usuario']        = $row["Nombre_usuario"];
    $_SESSION['foto']               = $row["Foto_perfil"];
    $_SESSION['nom_com']            = $row["Nombre_completo"];
    $_SESSION['correo']             = $row["Correo"];
    $_SESSION['num_contact']        =$row["Numero_contacto"];
    $_SESSION['$fecha']             =$row["Fecha_nacimiento"];
   
  }
    }

}

?>