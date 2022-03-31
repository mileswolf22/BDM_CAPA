<?php

    $Usuario_us = $_POST['usuario'];
    $Password_us = $_POST['contraseña'];
    include_once 'C_Apilogin.php';

    $api = new ApiLogin();
    $api->loginUser($Usuario_us, $Password_us);

?>