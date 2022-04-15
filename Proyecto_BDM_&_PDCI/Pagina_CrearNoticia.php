
<!DOCTYPE html>

<html lang="es">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Universe</title>
    <link rel="shortcut icon" href="recursos/imagenes/theUniverse_icon.png">
    <link rel="stylesheet" href="css/estilos_Pagina_Registro.css">
    <link rel="stylesheet" href="css/estilos_Loader.css">
    <link rel="stylesheet" href="css/boostrap_solocarrusel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/script_Loader.js"></script>
    <script src="js/script_ValidacionPalabrasClave.js"></script>
    <script src="js/script_ControladorVideo.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    
</head>

<body class="bodyCrearNoticia">
<div class="loader"></div>

<form action="Pagina_ResultadoBuscar.html" method="GET" id="form" enctype='multipart/form-data'>
<div class="form">
                <h1>Agregar Noticia</h1>
                <br>
                <div class="grupo">
                    <input type="text" name="Lugar" id="Lugar" required><span class="barra"></span>
                    <label class="datos-form" for="">Lugar Del Acontecimiento</label>
                </div>
                <div class="grupo">
                    <h5>Fecha</h5>
                    <input type="datetime-local" name="FechaHora">
                </div>
                <div class="grupo">
                    <input type="text" name="Titulo" id="Titulo" required><span class="barra"></span>
                    <label class="datos-form" for="">Titulo</label>
                </div>
                <div class="grupo">
                    <h4>Descripción Breve</h4>
                    <br>
                    <textarea class="detalle-textarea" name="Descripcion" rows="4" cols="40" placeholder="Escriba algo"></textarea>
                </div>
                <div class="grupo">
                    <h4>Texto</h4>
                    <br>
                    <textarea class="detalle-textarea" name="Texto" rows="4" cols="40" placeholder="Escriba algo"></textarea>
                </div>
                <div class="grupo">
                   <div id="inputFileImg">
                     <input type="file[]" id="imagenPrevisualizacion" accept="image/*" onchange="ImgPrevChange(this);" required multiple />
                     <label class="foto-form" id="foto-form" for="imagenPrevisualizacion">Imagenes</label>
                   </div>

                   <input type="hidden" name="TotalImg" id="TotalImg" value="0">

                  <div class="VideoFoto-Grupo">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner" id="carousel-innerImg">
                      <div class="carousel-item active">
                        <img src="recursos/imagenes/Fotos_Perfil/gatico_01.jpg" height="256" width="100%" id="imgPrev_0" class="d-block w-100">
                     </div>
                    </div>
                    <button class="carousel-control-prev" type="button" id="CarruselImgNext"data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                   </button>
                    <button class="carousel-control-next" type="button" id="CarruselImgNext"data-bs-target="#carouselExampleControls" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                    </button>
                   </div>

                  
                  </div>

                  <script src="js/script_ImagenPrevisualizacionCarrusel.js"></script>
                   <br>
                </div>

                <div class="grupo">

                 <div id="inputFileVideo">
                     <input type="file[]" id="videoPrevisualizacion" accept="video/mp4" onchange="VideoPrevChange(this);" required multiple />
                     <label class="foto-form" id="video-form" for="videoPrevisualizacion">Videos</label>
                 </div>


                 <input type="hidden" name="TotalVideos" id="TotalVideos" value="0">

                    <div class="VideoFoto-Grupo">      
                     <div id="carouselExampleFade" class="carousel slide" data-bs-interval="false">
                      <div class="carousel-inner" id="carousel-innerVideo">
                          <div class="carousel-item active">
                              <video class="videoPlayer" id="videoPlayer_0" height="340" controls >
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

                  </div>
                        
                  <script src="js/script_VideoPrevisualizacionCarrusel.js"></script>
                   <br>

                </div>
                <div class="grupo">
                    <input type="text" name="Etiqueta" id="Etiqueta" placeholder="Escribe tu etiqueta sin #">
                    <label class="datos-form" for="">Palabras Clave</label><span class="barra"></span>
                </div>  
                <div class="grupo">
                    <button type="button" onclick="AgregarEtiquetaFuncion();" id="AgregarEtiqueta">Agregar Etiqueta</button>
                    <button type="button" onclick="EliminarEtiquetaBusquedaFuncion();" id="EliminarEtiqueta">Eliminar Etiqueta</button> 
                </div>
                <div class="grupo">
                    <select class="categorias-select" name="EtiquetaPrincipal" id="menuEtiquetas"> 
                        <option selected>...</option>
                    </select>
                    <br><br>
                </div> 
                <div class="grupo">
                <h4>Sección Principal</h4>
                    <select class="categorias-select" name="EtiquetaSecundaria1" id="menuEtiquetas"> 
                        <option selected>...</option>
                    </select>
                    <br><br>
                </div>
                <div class="grupo">
                <h4>Secciones Secundarias</h4>
                    <select class="categorias-select" name="EtiquetaSecundaria2" id="menuEtiquetas"> 
                        <option selected>...</option>
                    </select>
                    <br><br>
                </div>

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>