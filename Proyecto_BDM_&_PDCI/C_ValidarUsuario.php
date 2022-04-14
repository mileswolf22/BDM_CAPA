<?php
  
  if(!empty($user)) {
    comprobar($user);
}

function comprobar($b) {
    $con = mysql_connect('localhost','root', 'root','notidb');
    mysql_select_db('masajes', $con);

    $query = "CALL Verificar_Usuario('$b')";
    $result = mysqli_query ($con, $query);
     
    while($row = mysqli_fetch_row($result))
    {   
       
        $_SESSION['verif']  = $row[0]; 
       $temp =  $_SESSION['verif'];
       return $temp;
    }
     
    if($contar == 0){
        echo'UsuarioNoDisponible';
    }else{
        echo'UsuarioDisponible';
}     
?>