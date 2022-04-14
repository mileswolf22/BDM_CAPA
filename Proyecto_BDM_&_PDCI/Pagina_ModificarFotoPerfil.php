<?php
session_start();
$con=mysqli_connect('localhost','root','root','notidb');

$temp = $_SESSION["US"];
$query_mostrar = "CALL Mostrar_Usuario('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
       
        base64_encode($_SESSION['foto']               = $row[2]);
       
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/script_Loader.js"></script>
    
</head>

<body class="bodyRegistro">
    <div class="loader"></div>


    <body class="bodyRegistro">
        <form action="C_ModificarFoto.php" method="Post" id="form" method="Post" enctype="multipart/form-data">
            <div class="form">
                <h1>Modificar Foto Perfil</h1>
                <div class="grupo">
                <input id="usuario" name="usuario" type="hidden" value = <?php echo $_SESSION["US"];?>>
                
                <div id="inputFileImg">
                    <input type="file" name="imagenPrevisualizacion" id="imagenPrevisualizacion" accept="image/*" required/>
                    <label class="foto-form" id="foto-form" for="imagenPrevisualizacion">Foto de perfil</label> 
                   </div>    
                   
                    <img style="max-height: 200px" id="imagenPrevisualizacion01" src="data:image/jpg;base64, <?php echo "".base64_encode($_SESSION['foto']); ?>">
                        <script src="js/script_ImagenModificar.js"></script>
                        <br>
                </div>
                
                <button type="submit">Cambiar Foto</button>
            </div>
        </form>               
    </body>    
    
    
</body>

</html>