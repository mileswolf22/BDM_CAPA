<?php

include_once 'C_Valida_Login.php';

class ApiLogin{

    function loginUser($CorreoUs2, $PassUs2){
        $usuario = new Login();
        $arrUsuario = array();
        $arrUsuario["elementos"] = array();
        $res = $usuario->login($CorreoUs2, $PassUs2);

        if($row = $res->fetch(PDO::FETCH_ASSOC))
            header("Location: index.php");
        else
            header("Location: Pagina_PrincipalUsuario.php");
    }
}

?>