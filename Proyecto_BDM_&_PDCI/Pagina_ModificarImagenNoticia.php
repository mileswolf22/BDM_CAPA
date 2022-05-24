<?php
$_POST['referencia'] = (isset($_POST['num2'])) ? $_POST['num2'] : '';
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

<form action="C_ModifImagenNoti.php" method="Post" id="form" enctype='multipart/form-data'>
<input type="hidden" name="num2" id="num2" value = <?php echo$_POST['referencia']?>>
<div class="form">
                <h1>Modificar Imagen Noticia</h1>
                <br>

                <div class="grupo">
                   <div id="inputFileImg">
                     <input type="file" id="imagenPrevisualizacion" name = "imagenPrevisualizacion[]" accept="image/*" onchange="ImgPrevChange(this);" required multiple />
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

                
              
                

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>