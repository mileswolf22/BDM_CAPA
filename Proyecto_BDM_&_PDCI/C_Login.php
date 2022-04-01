<?php
session_start();
    $Usuario_us  =  $_REQUEST['usuario'];
    $Password_us =  $_REQUEST['contraseña'];
  
$_SESSION['rol'] = $_REQUEST['tipoUsuario'];

    include_once 'C_Apilogin.php';
    
if($_SESSION['rol'] == 'Lector'){
    $api = new ApiLogin();
    $api->loginUser($Usuario_us, $Password_us);

}else{
    //header("Location: index.php");
    echo'<script type="text/javascript">
        alert("Usuario o contraseña no válido: Por favor revisa que tus datos esten bien e inténtalo de nuevo");

        </script>';
};

if($_SESSION['rol'] == 'Reportero'){
    $api = new ApiLogin();
    $api->loginUserReportero($Usuario_us, $Password_us);

}else{
    //header("Location: index.php");
    echo'<script type="text/javascript">
        alert("Usuario o contraseña no válido: Por favor revisa que tus datos esten bien e inténtalo de nuevo");

        </script>';
};

if($_SESSION['rol'] == 'Editor'){
    $api = new ApiLogin();
    $api->loginUserEditor($Usuario_us, $Password_us);

}else{
    //header("Location: index.php");
    echo'<script type="text/javascript">
        alert("Usuario o contraseña no válido: Por favor revisa que tus datos esten bien e inténtalo de nuevo");

        </script>';
};

?>