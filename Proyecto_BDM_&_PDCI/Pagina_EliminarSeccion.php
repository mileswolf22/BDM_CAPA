<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'notidb');

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

<form action="C_EliminarSeccion.php" method="Post" id="form">
<div class="form">
                <h1>Eliminar Sección</h1>
                <br>

                <div class="grupo">
                <h4>Selecciona la sección</h4>
                    <select class="categorias-select" name="menuEtiquetas" id="menuEtiquetas" value = "0"> 
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

                <button type="submit" class="boton-preguntar">Eliminar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>