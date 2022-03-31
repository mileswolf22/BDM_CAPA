<?php
session_start();
    $Usuario_us = $_SESSION['US'] = $_REQUEST['usuario'];
    $Password_us = $_SESSION['CON'] =$_REQUEST['contraseña'];
  
$_SESSION['rol'] = $_REQUEST['tipoUsuario'];

    include_once 'C_Apilogin.php';
    
if($_SESSION['rol'] == 'Lector'){
    $api = new ApiLogin();
    $api->loginUser($Usuario_us, $Password_us);

}elseif($_SESSION['rol'] == 'Reportero'){
    $api = new ApiLogin();
    $api->loginUserReportero($Usuario_us, $Password_us);

}elseif($_SESSION['rol'] == 'Editor'){
    $api = new ApiLogin();
    $api->loginUserEditor($Usuario_us, $Password_us);

}else{
    header("Location: index.php");
}

?>