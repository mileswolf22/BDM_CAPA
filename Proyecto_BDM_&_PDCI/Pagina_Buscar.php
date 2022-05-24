<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli2 = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli3 = new mysqli('localhost', 'root', 'root', 'notidb');

//$_SESSION['buscar_nombre']      = '';
//$_SESSION['buscar_etiqueta']    = '';
//$_SESSION['buscar_seccion']     = '';
//$_SESSION['buscar_fecha']       = '';
 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/script_Loader.js"></script>
    <script src="js/script_ValidacionPalabrasClave.js"></script>
    
</head>

<body>
<div class="loader"></div>

<form action="Pagina_ResultadoBuscar.php" method="POST" id="form">
<div class="form">
                <h1>Búsqueda Avanzada</h1>
                <br>
                <h5>Titulo de Noticia</h5>
                <div class="grupo">
                    <input type="search" name="Texto" id="Texto">
                    <label class="datos-form" for="">Buscar en la Web</label><span class="barra"></span>
                </div>
                <br>
                <div class="grupo">
                <h5>Buscar por Etiqueta</h5><input type="radio" class="form-check-input" name = "Etiqueta" id="radioAceptar" value="1">
                <select class="categorias-select" name="menuEtiquetas" id="menuEtiquetas"> 
                        <option selected value = "0"> 
                            ...
                                    <?php
                                    $query = $mysqli -> query ("CALL Mostrar_Etiquetas()");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['Etiqueta'].'">'.$valores['Etiqueta'].'</option>';
                                        }
                                    ?>

                        </option>
                        </select>
                    <br><br>
                </div>
<br>
                <div class="grupo">
                <h5>Buscar por Seccion</h5><input type="radio" class="form-check-input" name = "Seccion" id="radioAceptar" value="1">

                    <select class="categorias-select" name="menuSecciones" id="menuSecciones"> 
                    <option selected value = "0"> 
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

                
                

                <button type="submit" class="boton-preguntar">Buscar</button>
               

            </div>


            

        </form>               

        
        
    </body> 

</html>