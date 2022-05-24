<?php
session_start();
$con=mysqli_connect('localhost','root','root','notidb');

$temp = $_SESSION["US"];
$query_mostrar = "CALL Mostrar_Usuario('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['nom_us']             = $row[0]; 
        $_SESSION['nom_com']            = $row[1]; 
        base64_encode($_SESSION['foto']               = $row[2]);
        $_SESSION['correo']             = $row[3];
        $_SESSION['num_contact']        = $row[4];
        $_SESSION['fecha']              = $row[5];

    }
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaPerfil.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        

        <?php  include ('./headUsuario.php')?>
    
    </head>


    <body>


    <?php  
     
     $RolUsuario = $_SESSION['RolHeader'];
     
     switch ( $RolUsuario ) {
       case 'Editor':
        include ('./headerAdministrador.php');
         break;
       case 'Reportero':
         include ('./headerAdministrador.php');
          break;
       case 'Usuario':
        include ('./headerUsuario.php');
         break;
        default:
        include ('./headerUsuarioNoLoggeado.php');
        break;
      }
    
     ?>

<main>

    <section class="contenedor">

    <br><br><br>
    
            
            
           
            <div class="contenedor">
            <div class="contenedor-PreguntasScrollPerfil">
                <div class ="grupo-preguntaPerfil">                    
                    <div class="pregunta-fondoPerfil">  
                        <img style="max-height: 200px" id="imagen-descripcionPerfil" src="data:image/jpg;base64, <?php echo "".base64_encode($_SESSION['foto']); ?>"> 
                        <h3 id="MiPerfilTitulo">Mi Perfil</h3>                                 
                        <h4 id="UsuarioPerfil"><?php echo $_SESSION["US"];?></h4> 
                        <h3 id="NombrePerfil"> <?php  echo $_SESSION["nom_com"];?></h3>                                      
                        <h3 id="CorreoPerfil"><?php  echo $_SESSION["correo"];?></h3>
                        <h3 id="FechaNacimientoPerfil"><?php  echo $_SESSION["fecha"];?></h3>                       
                        <a href="Pagina_ModificarPerfilUsuario.php">Modificar Perfil</a>
                        <a href="Pagina_ModificarFotoPerfil.php">Modificar Foto</a>

                        <form action = "C_EliminarUsuario.php" action = POST id="form">
                            
                        <button type="submit"> Eliminar Usuario</button>   
                        
                    </form>
                        <br>                   
                    </div>                                        
        
                </div>
            </div>
            </div>

    </section>
    
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>