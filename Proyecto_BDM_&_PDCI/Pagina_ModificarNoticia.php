<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli2 = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli3 = new mysqli('localhost', 'root', 'root', 'notidb');

$_SESSION['Aut']   = ''; 
$_SESSION['key']   = '';

$con=mysqli_connect('localhost','root','root','notidb');

$tempura = isset($_POST['num2']) ? $_POST['num2'] : '';
$query_mostrar = "CALL MostrarModif('$tempura')";
$result = mysqli_query ($con, $query_mostrar);
    

    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['Aut']                             = $row[0]; 
        $_SESSION['key']                             = $row[1]; 
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
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    
</head>

<body class="bodyCrearNoticia">
<div class="loader"></div>

<form action="C_ModificarNoticia.php" method="POST" id="form">
<div class="form">
                <h1>Modificar Noticia</h1>
                <br>
                <input type="text" name="Autor" id="Autor" value =<?php echo $_SESSION['Aut']?>>
                <input type="text" name="Key" id="Key" value =<?php echo $_SESSION['key']?>>
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
                    <textarea class="detalle-textarea" name="descripcion" rows="4" cols="40" placeholder="Escriba algo"></textarea>
                </div>
                <div class="grupo">
                    <h4>Texto</h4>
                    <br>
                    <textarea class="detalle-textarea" name="texto" rows="4" cols="40" placeholder="Escriba algo"></textarea>
                </div>
                <!--<div class="grupo">
                    <input type="file" id="imagenPrevisualizacion" accept="image/*" />
                    <label class="foto-form" for="imagenPrevisualizacion">Imagenes</label>  
                        <br>

                <div class="VideoFoto-Grupo">
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

                </div>
                <div class="grupo">

                <div class="VideoFoto-Grupo">
                    <input type="file" id="imagenPrevisualizacion" accept="image/*" />
                    <label class="foto-form" for="imagenPrevisualizacion">Videos</label>  
                        <br>

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

                  </div>
                        
                </div> -->
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
                                    $query = $mysqli3 -> query ("CALL Mostrar_Secciones()");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['key_seccion'].'">'.$valores['nombre_seccion'].'</option>';
                                        }
                                    ?>

                        </option>
                                    
                    </select>
                    <br><br>
                </div> 
                <br>
                <div class="grupo">
                
                <h4>Sección Principal</h4>
                    <select class="categorias-select" name="menuSeccion" id="menuSeccion"> 
                        <option selected>...

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
                    
                <h4>Sección Secundaria</h4>
                    <select class="categorias-select" name="menuSecundario" id="menuSecundario"> 
                        <option selected>...

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
                

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>