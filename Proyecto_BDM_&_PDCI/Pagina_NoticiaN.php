<?php
session_start();
$con=mysqli_connect('localhost','root','root','notidb');

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "notidb";


	$conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $conn2 = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
	$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$temp = $_SESSION['TituloProvisionalN'];
$query_mostrar = "CALL Mostrar_Noticia_Completa('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['autor']                          = $row[0]; 
        $_SESSION['fechapublicacion']               = $row[1]; 
        $_SESSION['fechasuceso']                    = $row[2]; 
        $_SESSION['lugarsuceso']                    = $row[3]; 
        $_SESSION['titulaso']                       = $row[4]; 
        $_SESSION['descripcion']                    = $row[5]; 
        $_SESSION['texto']                          = $row[6];
        $_SESSION['etiqueta']                       = $row[7];
        $_SESSION['seccionprincipal']               = $row[8]; 
        $_SESSION['seccionsecundaria']              = $row[9]; 
        $_SESSION['numeroref']                      = $row[10]; 
        $_SESSION['positivos']                      = $row[11]; 
        $_SESSION['id']                             = $row[12]; 
    }


?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaNoticia.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        <script src="js/script_ControladorVideo.js"></script>
        <script src="js/script_PalabrasClave.js"></script>
        <script src="js/script_LikeDislike.js"></script>
        <script src="js/script_ComentariosYaPuestos.js"></script>
        <script src="js/script_Comentarios.js"></script>
        <script src="js/script_FechaHora.js"></script>
        

        <?php  include ('./headUsuario.php')?>
    
    </head>


    <body onload="ComentariosYaPuestos();PonerCategorias();">


    <?php  include ('./headerUsuario.php')?>

<main>

    <section class="contenedor">

    <br><br><br>
    <div class="contenedor-NoticiaScroll">
        <div class ="grupo-Noticia">  
            <div class="noticia-Categoria">
                <img src="recursos/imagenes/iconos/movie-play-solid-24.png">
                <br>
            </div>                  
            <div class="noticia-fondo"> 

            <div class="Datos-Noticia">
                 
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> Creado:</h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> <?php echo$_SESSION['fechapublicacion']?></h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> | </h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> Publicado:</h5> 
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> <?php echo$_SESSION['fechasuceso']?></h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> | </h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> Reportero:</h5>
                <h5 class="DatosNoticia-Datos" id="EditadoP1"> <?php echo$_SESSION['autor']?></h5>
                <br>
            </div>
                
                <h1> <?php echo$_SESSION['titulaso']?></h1>              
                <br>
                <h5><?php echo$_SESSION['descripcion']?></h5>

                <input type="hidden" name="num" id="num" value = <?php echo$_SESSION['numeroref']?>>
                
                <div class="LugarFechaNoticia">
                    <h3 class="LugarFechaNoticia-Datos"><?php echo$_SESSION['lugarsuceso']?></h3>
                    <h3 class="LugarFechaNoticia-Datos"> | </h3>
                    <h3 class="LugarFechaNoticia-Datos"><?php echo$_SESSION['fechasuceso']?></h3>
                </div>  
                <br>                 
            </div> 

            <div class="text-noticia">                     
            <br><br>
            </div>        
                  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                    <?php
                    $contador = 0;
                    $temp = $_SESSION['numeroref'];
                    $stmt = $conn->prepare("CALL Imagen_NotaCompleta('$temp')");
                    $stmt->execute();
                    $lista_imagenes = $stmt->fetchAll(); 
                    foreach($lista_imagenes as $imagen) {
                        $contador++;
                    ?>
              
              
                   <!-- <img src=  class="d-block user-select-none" width="100%" height="200"/> -->
                    <img class="img-thumbnail" src="./recursos/imagenes/<?=$imagen['imagen']?> " width='300' height='200'"> 
                 
        
                    <?php
                    }
                    ?> 
                  </div>
                 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="text-noticia">                     
            <br><br>
            </div>                        
                    <div class="noticia-fondo">                         
                        <br>
                        <br>  
                        <p><?php echo$_SESSION['texto']?></p>
                                  <br><br>

                                  <h4>Palabras Clave</h4>
                                  <div class ="TodasCategorias" id="TodasCategorias">
                                    <div class="Tcategorias" id="Tcategorias">
                                    </div>
                                </div>
                                  <br><br>
                    </div> 


                    <div class="text-noticia">                     
                    <br><br>
                  </div> 
      
      
                                        <div id="carouselExampleFade" class="carousel slide" data-bs-interval="false">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <video class="videoPlayer" id="videoPlayer" height="340" controls >
                              <?php
                                    $contador2 = 0;
                                    $temp2 = $_SESSION['numeroref'];
                                    $stmt2 = $conn2->prepare("CALL Video_NotaCompleta('$temp2')");
                                    $stmt2->execute();
                                    $lista_imagenes = $stmt2->fetchAll(); 
                                    foreach($lista_imagenes as $video) {
                                        $contador2++;
                                    ?>
                                    <source src="./recursos/videos/<?=$video['video']?>" type="video/mp4">
                                    <?php
                                    }
                                    ?>
                              </video>
                          </div>
                          
                      <button class="carousel-control-prev" type="button" id="CarruselVideoPrev" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon"   onclick="PausaVideo();" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" id="CarruselVideoNext" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon"   onclick="PausaVideo();" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  </div>

                 
                       
                <?php  
     
     $RolUsuario = $_SESSION['RolHeader'];
     
     switch ( $RolUsuario ) {
       case 'Editor':
        
        include ('./ComentarioAdmin.php');
         break;
         
         case 'Reportero':
            ?>
          form action="Pagina_ModificarNoticia.php" method="POST" id="form"> 
            <input type="hidden" name="num2" id="num2" value = <?php echo$_SESSION['numeroref']?>>
          <button  action = "Pagina_ModificarNoticia.php" method = "Post" class="buttonNoticiaEsh">Modificar Noticia</button> 
          </form> 
          <?php
           break;
           
         
            ?>
             
    <?php
      }
    
     ?>
                  
                  <br><br>
            <div class="text-noticia">
                <br><br>
                <div class="imagenLike"> 
                                
                 <img id="LikeP_1" class="imagen-iconoLike offoff"onclick="funcioniconLike(this)" src="recursos/imagenes/iconos/star-regular-48.png">
                  <h3> 0 </h3>
                  <h3> ★</h3>
                  <br><br><br>
                </div> 
           </div>
                  <br><br>
                </div> 




                </div>
            </div>
            </div>



    </section>

    <section class="contenedor">

    <?php

    include ('./CuadroComentarios.php');

    ?>

    

    <div class="comentariosRespuestas">
                      <form class="comentariosRespuestasform">
                          <div class="grupo">
                          <input class="usuario" type="text" name="" id="usuario" title="panoso">
                          <input class="IdEscondido" type="text" name="" id="IdEscondido">
                          </div>

                         
                          <label class="datos-form">Comentario</label>
                          <textarea id="comment" class="form-control" required ></textarea></label>
                          </div>

                          <br><br>
                        <button type="button" class="buttonComentario" onclick="commentBox();">Enviar</button>
                        <br>
                      </form>
                  </div>

                  <script src="js/script_Comentarios.js"></script>
            </div>
          

    </section>
    
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>