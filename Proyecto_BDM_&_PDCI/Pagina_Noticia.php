<?php
session_start();
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
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> 19/02/2022</h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> | </h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> Publicado:</h5> 
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> 19/02/2022</h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> | </h5>
                <h5 class="DatosNoticia-Datos" id="FechaHoraP1"> Reportero:</h5>
                <h5 class="DatosNoticia-Datos" id="EditadoP1"> Sary Cazares</h5>
                <br>
            </div>
                
                <h1> ¡Por fin sale la pelicula de Sherk 5 en este 2022! </h1>              
                <br>
                <h5>Es extraño pero por fin despues de tanto tiempo de espera ya sale Sherk 5. Esperenla pronto en cines.</h5>

                <div class="LugarFechaNoticia">
                    <h3 class="LugarFechaNoticia-Datos"> México </h3>
                    <h3 class="LugarFechaNoticia-Datos"> | </h3>
                    <h3 class="LugarFechaNoticia-Datos"> 19/01/2022 </h3>
                </div>  
                <br>                 
            </div> 

            <div class="text-noticia">                     
            <br><br>
            </div>        
                
            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="recursos/imagenes/diseño1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="recursos/imagenes/diseño2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="recursos/imagenes/diseño3.jpeg" class="d-block w-100" alt="...">
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
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit dignissim magnis,
                             tincidunt gravida mattis felis eu in quam senectus, scelerisque vivamus
                              netus leo sapien maecenas viverra volutpat. Duis urna habitant pulvinar
                               suspendisse mi nisl neque fusce, fermentum magnis nascetur litora diam
                                natoque dui habitasse, curabitur feugiat vulputate torquent nullam nam
                                 posuere. Conubia fermentum orci at penatibus fringilla dictumst venenatis
                                 , vel hendrerit aliquet habitant primis lobortis, vitae fames arcu tortor
                                  porta ultrices.</p>
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
                                  <source src="./recursos/videos/Big_Enough.mp4" type="video/mp4">
                              </video>
                          </div>
                          <div class="carousel-item">
                              <video class="videoPlayer" height="340" controls>
                                  <source src="./recursos/videos/Nyan_Cat.mp4" type="video/mp4">
                              </video>
                          </div>
                          <div class="carousel-item"> 
                              <video class="videoPlayer" height="340" controls>
                                  <source src="./recursos/videos/Jinjo_Wii_BanjoKazooie.mp4" type="video/mp4">
                              </video>
                          </div>
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
      
      
                  <div class="text-noticia">  
                  <br><br>
                  <div class="imagenLike">                   
                  <img id="LikeP_1" class="imagen-iconoLike offoff"onclick="funcioniconLike(this)" src="recursos/imagenes/iconos/star-regular-48.png">
                  <h3> 0 </h3>
                  <h3> ★</h3>
                  <br><br><br>
                </div> 

                <br><br>

                <div class="comentariosRespuestas">

                <form class="comentariosRespuestasform">
                          <div class="grupo">
                          <label class="datos-form">Comentario Administrador</label>
                          <textarea id="comment" class="form-control" required ></textarea></label>
                          </div>

                          <br><br>
                        <button type="button" class="buttonComentario" >Enviar</button>
                        <a href="Pagina_ModificarNoticia.php" class="buttonNoticiaEsh">Modificar Noticia</a>
                        <a href="#" class="buttonNoticiaEsh">Eliminar Noticia</a>
                      </form>

                </div> 
                
                  <br><br>
                </div> 




                </div>
            </div>
            </div>



    </section>

    <section class="contenedor">

    <div class="contenedor-comentariosRespuesta">
                <div class="respuestas-resultado">
                          </div>
                          <div id="result">
               
               
               
               
                      </div>

    

    <div class="comentariosRespuestas">
                      <form class="comentariosRespuestasform">
                          <div class="grupo">
                          <input class="usuario" type="text" name="" id="usuario" title="panoso">
                          <input class="IdEscondido" type="text" name="" id="IdEscondido">
                          </div>

                          <div class="grupo">
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