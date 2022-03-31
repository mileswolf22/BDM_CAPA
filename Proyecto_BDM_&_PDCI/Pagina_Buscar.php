
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

<form action="Pagina_ResultadoBuscar.php" method="GET" id="form">
<div class="form">
                <h1>Búsqueda Avanzada</h1>
                <br>
                <div class="grupo">
                    <input type="search" name="" id="Texto" required>
                    <label class="datos-form" for="">Buscar en la Web</label><span class="barra"></span>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="Etiqueta" placeholder="Escribe tu etiqueta sin #">
                    <label class="datos-form" for="">Palabras Clave</label><span class="barra"></span>
                </div>  
                <div class="grupo">
                    <button type="button" onclick="AgregarEtiquetaFuncion();" id="AgregarEtiqueta">Agregar Etiqueta</button>
                    <button type="button" onclick="EliminarEtiquetaBusquedaFuncion();" id="EliminarEtiqueta">Eliminar Etiqueta</button>
                    
                </div>   
                <div class="grupo">
                    <select class="categorias-select" name="menuEtiquetas" id="menuEtiquetas"> 
                        <option selected>...</option>
                    </select>
                    <br><br>
                </div>
                <div class="grupo">
                    <h5>Fecha De Publicación</h5>
                    <input type="date" name="" id="fecha-Inicio">
                </div>
                

                <button type="submit" class="boton-preguntar">Buscar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>