
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
    <script src="js/script_ValidacionPalabrasClave.js"></script>
    
</head>

<body>
<div class="loader"></div>

<form action="Pagina_DashboardAdmin.html" method="GET" id="form">
<div class="form">
                <h1>Modificar Seccion</h1>
                <br>
                <div class="grupo">
                    <input type="text" name="" id="NombreSeccion" required><span class="barra"></span>
                    <label class="datos-form" for="">Nombre de la Sección</label>
                </div>
                <div class="grupo">
                    <h5>Color</h5>
                    <input type="color" name="Color" id="Color">
                </div>
                <div class="grupo">
                    <input type="file" id="imagenPrevisualizacion" accept="image/*" />
                    <label class="foto-form" for="imagenPrevisualizacion">Icono</label>  
                        <img id="imagenPrevisualizacion01" >
                        <script src="js/script_ImagenPrevisualizacion.js"></script>
                        <br>
                </div>

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>