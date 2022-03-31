<?php

include_once 'C_database.php';

class Login extends Database{
    
    function login($CorreoUs, $PassUs){
        $query = $this->connect()->query("CALL LogUs('$CorreoUs','$PassUs');");
        return $query;
    }
}	
?>