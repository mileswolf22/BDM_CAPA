
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/script_Loader.js"></script>
    <script src="js/script_IconSeccionButtons.js"></script>
    
</head>

<body class="bodyCrearSeccion">
<div class="loader"></div>

<form action="Pagina_DashboardAdmin.php" method="GET" id="form">
<div class="form">
                <h1>Modificar Sección</h1>
                <br>
                <div class="grupo">
                    <input type="text" name="" id="NombreSeccion" required><span class="barra"></span>
                    <label class="datos-form" for="">Nombre de la Sección</label>
                </div>
                <div class="grupo">
                    <h5>Color</h5>
                    <input type="color" name="Color" id="Color" value="#49408C" required>
                </div>
                <div class="grupo">
                    <h5>Icono de la Sección</h5>
                    <input type="hidden" name="Icon" id="Icon" value="recursos/imagenes/iconos/cake-solid-24.png" required >

                    <button type="button" class="iconsSeccionSolo" id="iconsSeccionSolo"> <img id="imgIconSeccion"src="recursos/imagenes/iconos/cake-solid-24.png"/></button>
                      <div id="groupIcons">
                           <button type="button" class="iconsSeccion" id="iconsSeccion_0" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/cake-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_1" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/baguette-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_2" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/bus-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_3" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/camera-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_4" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/car-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_5" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/cat-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_6" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/cloud-lightning-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_7" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/dna-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_8" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/dollar-circle-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_9" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/building-house-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_10" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/face-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_11" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/football-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_12" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/intersect-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_13" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/invader-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_14" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/money-withdraw-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_15" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/movie-play-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_16" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/music-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_17" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/palette-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_18" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/phone-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_19" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/pizza-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_20" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/planet-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_21" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/restaurant-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_22" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/search-alt-2-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_23" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/skull-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_24" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/store-alt-regular-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_25" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/sun-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_26" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/time-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_27" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/virus-solid-24.png"/></button>
                           <button type="button" class="iconsSeccion" id="iconsSeccion_28" onclick="IconsButton(this);"> <img src="recursos/imagenes/iconos/x-circle-solid-24.png"/></button>


                      </div>
                </div>

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>