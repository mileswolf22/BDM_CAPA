<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli2 = new mysqli('localhost', 'root', 'root', 'notidb');
$mysqli3 = new mysqli('localhost', 'root', 'root', 'notidb');

include_once 'C_EliminarUS.php';

$extend2 = new Eliminar();

 
error_reporting(E_ALL);
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

<form action="C_EliminarUS.php" method="POST" id="form">
<div class="form">
                <h1>Eliminar Usuario</h1>  
                <br>
                <div class="grupo">
                <h4>Selecciona usuario a eliminar</h4>&nbsp;<input type="radio" class="form-check-input" name = "ElimUs" id="radioDevolver" value="1">
                    <select class="categorias-select" name="user" id="user"> 
                        <option selected>...

                        <?php
                                    $query = $mysqli2 -> query ("CALL TraerUsuario()");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['Nombre_usuario'].'">'.$valores['Nombre_usuario'].'</option>';
                                        }
                                    ?>

                        </option>
                    </select>
               
                    <br><br>
                </div>

                <div class="grupo">
                <h4>Selecciona la sección a eliminar</h4>&nbsp;<input type="radio" class="form-check-input" name = "ElimSec" id="radioDevolver" value="1">
                    <select class="categorias-select" name="secc" id="secc"> 
                        <option selected>...

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
                <div class="grupo">
                    <h4>Comentario</h4>
                    <br>
                    <textarea class="detalle-textarea" name="texto" rows="4" cols="40" placeholder="Escriba algo"></textarea>
                </div>
                <div class="grupo">
                    
                    <br><br>
                </div>
                
                <button type="submit" name="btnEliminar" class="boton-preguntar">Eliminar</button>
               

            </div>

        </form>               

        
        
    </body> 

</html>