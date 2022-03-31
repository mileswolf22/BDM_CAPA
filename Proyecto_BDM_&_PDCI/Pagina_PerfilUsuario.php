

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


    <?php  include ('./headerUsuario.php')?>

<main>

    <section class="contenedor">

    <br><br><br>
    
            
            
           
            <div class="contenedor">
            <div class="contenedor-PreguntasScrollPerfil">
                <div class ="grupo-preguntaPerfil">                    
                    <div class="pregunta-fondoPerfil">  
                        <img id="imagen-descripcionPerfil" src="recursos/imagenes/Fotos_Perfil/gatico_01.jpg"> 
                        <h3 id="MiPerfilTitulo">Mi Perfil</h3>                                 
                        <h4 id="UsuarioPerfil">AryMistery</h4> 
                        <h3 id="NombrePerfil"> Leslie Sarahy Cazares Mendoza</h3> 
                        <h3 id="CorreoPerfil">sarycazares@live.com.mx</h3>
                        <h3 id="FechaNacimientoPerfil">14/07/1998</h3>                       
                        <a href="Pagina_ModificarPerfilUsuario.php">Modificar Perfil</a>
                        <a href="Pagina_BajaUsuarioEditor.php"> Eliminar Usuario</a>                     
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