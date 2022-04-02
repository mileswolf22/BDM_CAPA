<?php
	session_start();
    $_SESSION['rol'] = '';
    $_SESSION['US'] = '';
    $_SESSION['CON'] = '';
    $_SESSION['nom_us'] = '';           
    $_SESSION['nom_com']  = '';           
    $_SESSION['foto']     = '';           
    $_SESSION['correo']     = '';         
    $_SESSION['num_contact']   = '';     
    $_SESSION['$fecha']  = '';
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
    <script src="js/script_IniciarSesionUsuarioEditor.js"></script>

</head>

<body>
    <div class="loader"></div>
    
    <body>
        <form class= "Login" action="C_Login.php" method="Post">
            <div class="form">
                <h1>Iniciar Sesión</h1>
                <br>
                <div class="grupo">
                    <h4>Tipo de usuario:</h4>
                    
                    <SELECT name="tipoUsuario" class="categorias-select" id="tipoUsuario">
                       <OPTION value="Lector" selected>Lector</OPTION>
                       <OPTION value="Reportero">Reportero</OPTION>
                       <OPTION value="Editor">Editor</OPTION>
                    </SELECT >
                    <br><br>
                </div>
                <div class="grupo">
        
                    <input type="text" name="usuario" id="usuario" required><span class="barra"></span>
                    <label class="datos-form" for="">Usuario</label>
                </div>
                <div class="grupo">
                    <input type="password" name="contraseña" id="contraseña" required><span class="barra"></span>
                    <label class="datos-form" for="">Contraseña</label>
                </div>    
                <br>
                
            </div>

                <button type="submit" class="boton-iniciarsesion">Ingresar</button>

                

            
        </form>               

        
        
    </body>    
    
    
</body>
