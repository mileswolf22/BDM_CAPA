<?php
$_SESSION['US'] = $_REQUEST['usuario'];
include_once 'C_Valida_Login.php';

class ApiLogin{

    function loginUser($User2, $PassUs2){  //login para usuario
        $usuario = new Login();
        $arrUsuario = array();
        $arrUsuario["elementos"] = array();
        $res = $usuario->login($User2, $PassUs2);

        if($row = $res->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['RolHeader'] = "Usuario";
        header("Location: Pagina_PrincipalUsuario.php");
    }
        else{ 
        //header("Location: index.php");

        echo'<script type="text/javascript">
        alert("Usuario o contraseña no válido: Por favor revisa que tus datos esten bien e inténtalo de nuevo");
        document.getElementById('usuario').value =""
        document.getElementById('contraseña').value =""

        </script>';
    }
    }

    
    function loginUserReportero($User2, $PassUs2){ //login para reportero
        $usuario = new Login();
        $arrUsuario = array();
        $arrUsuario["elementos"] = array();
        $res = $usuario->loginR($User2, $PassUs2);

        if($row = $res->fetch(PDO::FETCH_ASSOC)){
        //header("Location: Pagina_ReporteNoticias.php");
        $_SESSION['RolHeader'] = "Reportero";
        header("Location: Pagina_PrincipalUsuario.php");
        
        }
        else{
        //header("Location: index.php");

        echo'<script type="text/javascript">
        alert("Usuario o contraseña no válido: Por favor revisa que tus datos esten bien e inténtalo de nuevo");
        document.getElementById('usuario').value =""
        document.getElementById('contraseña').value =""

        </script>';
        }
        
    }

    
    function loginUserEditor($User2, $PassUs2){ //login para editor
        $usuario = new Login();
        $arrUsuario = array();
        $arrUsuario["elementos"] = array();
        $res = $usuario->loginE($User2, $PassUs2);

        if($row = $res->fetch(PDO::FETCH_ASSOC)){
        //header("Location: Pagina_DashboardAdmin.php");
        $_SESSION['RolHeader'] = "Editor";
        header("Location: Pagina_PrincipalUsuario.php");

        }
        else{
        //header("Location: index.php");

        echo'<script type="text/javascript">
        alert("Usuario o contraseña no válido: Por favor revisa que tus datos esten bien e inténtalo de nuevo");
        document.getElementById('usuario').value =""
        document.getElementById('contraseña').value =""

        </script>';
        }
        
    }
}

?>