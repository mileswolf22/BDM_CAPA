<?php
session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli2 = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli3 = new mysqli('localhost', 'root', 'root', 'notidb');


$rand = range(1, 10000);
shuffle($rand);
foreach ($rand as $val) {
}


?>

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

<form action="C_InsertarNoticia.php" method="Post" id="form" enctype='multipart/form-data'>
<div class="form">


                
               
                <div class="grupo">
                   <div id="inputFileImg">
                     <input type="file" id="imagenPrevisualizacion" name = "imagenPrevisualizacion[]" accept="image/*" onchange="ImgPrevChange(this);" required multiple />
                     <label class="foto-form" id="foto-form" for="imagenPrevisualizacion">Imagenes</label>
<!--
                     <script type="text/javascript">
                        $(document).ready(function(){
                        $("#submitForm").on("submit", function(e){
                        e.preventDefault();
                        $.ajax({
                        url :"upload.php",
                        type :"POST",
                        cache:false,
                        contentType : false, // you can also use multipart/form-data replace of false
                        processData : false,
                        data: new FormData(this),
                        success:function(response){
                        $("#success").show();
                        $("#multipleFile").val("");
                        fetchData();
                        }
                        });
                        });
                    </script>
                    -->
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
                     <input type="file" id="videoPrevisualizacion" name = "videoPrevisualizacion[]" accept="video/mp4" onchange="VideoPrevChange(this);" required multiple />
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
                    <select class="categorias-select" name="Etiqueta" id="menuEtiquetas"> 
                        <option selected value = "0"> 
                            ...
                                    <?php
                                    $query = $mysqli -> query ("CALL Mostrar_Secciones()");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['key_seccion'].'">'.$valores['nombre_seccion'].'</option>';
                                        }
                                    ?>

                        </option>
                                    
                    </select>
                    <br><br>
                </div> 
                <div class="grupo">
                <h4>Secci??n Principal</h4>
                    <select class="categorias-select" name="EtiquetaPrincipal" id="menuEtiquetas"> 
                        <option selected>

                        ...
                                    <?php
                                    $query = $mysqli2 -> query ("CALL Mostrar_Secciones()");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['key_seccion'].'">'.$valores['nombre_seccion'].'</option>';
                                        }
                                    ?>

                        </option>
                    </select>
                    <br><br>
                </div>
                <div class="grupo">
                <h4>Secciones Secundarias</h4>
                    <select class="categorias-select" name="EtiquetaSecundaria" id="menuEtiquetas"> 
                        <option selected>

                        ...
                                    <?php
                                    $query = $mysqli3 -> query ("CALL Mostrar_Secciones()");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['key_seccion'].'">'.$valores['nombre_seccion'].'</option>';
                                        }
                                    ?>

                        </option>
                    </select>
                    <br><br>
                </div>

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>