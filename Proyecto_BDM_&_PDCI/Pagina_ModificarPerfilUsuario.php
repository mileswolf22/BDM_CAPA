<?php
session_start();
$con=mysqli_connect('localhost','root','root','notidb');

$temp = $_SESSION["US"];
$query_mostrar = "CALL Mostrar_Usuario('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['nom_us']             = $row[0]; 
        $_SESSION['nom_com']            = $row[1]; 
        base64_encode($_SESSION['foto']               = $row[2]);
        $_SESSION['correo']             = $row[3];
        $_SESSION['num_contact']        = $row[4];
        $_SESSION['fecha']             = $row[5];
        $_SESSION['contra']             = $row[6];
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
    <script src="js/script_ValidadorContrase├▒a.js"></script>
    <script src="js/script_ValidadorCorreo.js"></script>
    <script src="js/script_ValidadorFecha.js"></script>
    <script src="js/script_ValidadorNumeroTelefonico.js"></script>
    <script src="js/script_ValidadorUsuario.js"></script>
    <script src="js/script_ValidadorNombre.js"></script>
    
</head>

<body class="bodyRegistro">
    <div class="loader"></div>

    
    <body class="bodyRegistro">
        <form class="login"  id='form_registro' action="C_ModificarUsuario.php" method="Post" enctype="multipart/form-data">
            <div class="form">
                <h1>Modificar Perfil</h1>
                <input id="usuario" name="usuario" type="hidden" value = <?php echo $_SESSION["US"];?>>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" value = <?php echo $_SESSION["nom_com"];?> required><span class="barra"></span>
                    <label class="datos-form" for="">Nombre Completo</label>
                </div>
                <div class="grupo">
                    <input type="text" name="numeroContacto" id="numeroContacto" value = <?php echo $_SESSION["num_contact"];?> pattern="[0-9]{10}" title="El n├║mero debe ser a 10 d├şgitos" required><span class="barra"></span>
                    <label class="datos-form" for="">N├║mero De Contacto</label>
                </div>
                <div class="grupo">
                    <h4>Fecha de nacimiento</h4>
                    <input type="date" name="fecha-nacimiento" id="fecha-nacimiento" value = <?php echo $_SESSION["fecha"];?> required>

                        <br>

                </div>
                <div class="grupo">
                    <input type="text" name="correo" id="correo" value = <?php echo $_SESSION["correo"];?> required><span class="barra"></span>
                    <label class="datos-form" for="">Correo Electr├│nico</label>
                </div>
               
                <div class="grupo">
                    <input type="text" name="contrase├▒a" id="contrase├▒a" value = <?php echo $_SESSION["contra"];?> title= "La contrase├▒a debe de tener: 8 car├ícteres, 1 n├║mero, 1 may├║scula, 1 min├║scula, 1 car├ícter especial (┬íÔÇŁ#$%&/=ÔÇÖ?┬í┬┐:;,.-_+*{][}) y sin espacios en blanco" onclick="Contrase├▒aOnclick()" required>
                    <span class="barra"></span>
                    <label class="datos-form" for="">Contrase├▒a</label>
                </div>
                <div class="grupo">
                    <input type="text" name="confirmarcontrase├▒a" id="confirmarcontrase├▒a" value = <?php echo $_SESSION["contra"];?> required>
                    <span class="barra"></span>
                    <label class="datos-form" for="">Confirmar Contrase├▒a</label>
                </div>   
                <button type="submit">Modificar</button>
            </div>
        </form>               
    </body>    
    
    
</body>

</html>