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
                <h1>Eliminar Usuario</h1>
                <br>
                <div class="grupo">
                <h4>Selecciona la sección</h4>
                    <select class="categorias-select" name="menuEtiquetas" id="menuEtiquetas"> 
                        <option selected>...</option>
                    </select>
                    <button type="button"  id="EliminarEtiqueta">Seleccionar</button> 
                    <br><br>
                </div>
                <div class="grupo">
                    <h4>Comentario</h4>
                    <br>
                    <textarea class="detalle-textarea" name="texto" rows="4" cols="40" placeholder="Escriba algo"></textarea>
                </div>
                <div class="grupo">
                    <button type="button"  id="EliminarEtiqueta">Eliminar Seccion</button> 
                    <br><br>
                </div>

                <button type="submit" class="boton-preguntar">Enviar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>