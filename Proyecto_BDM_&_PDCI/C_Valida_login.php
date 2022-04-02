<?php

include_once 'C_database.php';

class Login extends Database{

function login($User, $PassUs){


    $query = $this->conectar()->query("CALL Logus2('$User','$PassUs');");
    return $query;

    
}	

function loginR($User, $PassUs){
     
    $query = $this->conectar()->query("CALL LogReportero('$User','$PassUs');");
    return $query;

}	

function loginE($User, $PassUs){
     
    $query = $this->conectar()->query("CALL LogEditor('$User','$PassUs');");
    return $query;

}	

}
?>