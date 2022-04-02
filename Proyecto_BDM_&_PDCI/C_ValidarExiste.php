<?php
session_start();
include_once C_database;

class validar Extends Database{

    private $ingresa;

    function validar($ingresa){

        /*$query = $this->conectar()->query("CALL Verificar_Usuario('$ingresa');");
        return $query;*/
        $temp = ''
        $con=mysqli_connect('localhost','root','root','notidb');
        $query_mostrar = "CALL Verificar_Usuario('$ingresa')";
        $result = mysqli_query ($con, $query_mostrar);
            
            while($row = mysqli_fetch_row($result))
            {   
               
                $_SESSION['verif']  = $row[0]; 
               $temp =  $_SESSION['verif'];
               return $temp;
            }

            switch ($temp) {
                case 1:
                    echo'<script type="text/javascript">
                    alert("Este usuario no se encuentra disponible");
            
                    </script>';
                header("Location: Pagina_RegistroUsuario.php");
                   break;
                case 0:
                    echo'<script type="text/javascript">
                    alert("Este Usuario es valido");
            
                    </script>';
                    header("Location: Pagina_RegistroUsuario.php.php");;
                   break;
                
              }

    }
}

?>