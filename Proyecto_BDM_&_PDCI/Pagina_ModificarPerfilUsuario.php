
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
    <script src="js/script_ValidadorContraseña.js"></script>
    <script src="js/script_ValidadorCorreo.js"></script>
    <script src="js/script_ValidadorFecha.js"></script>
    <script src="js/script_ValidadorNumeroTelefonico.js"></script>
    <script src="js/script_ValidadorUsuario.js"></script>
    <script src="js/script_ValidadorNombre.js"></script>
    
</head>

<body class="bodyRegistro">
    <div class="loader"></div>


    <body class="bodyRegistro">
        <form action="Pagina_PerfilUsuario.php" method="GET" id="form">
            <div class="form">
                <h1>Modificar Perfil</h1>
                <div class="grupo">
                    <input type="text" name="" id="nombre" required><span class="barra"></span>
                    <label class="datos-form" for="">Nombre Completo</label>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="numeroContacto" pattern="[0-9]{10}" title="El número debe ser a 10 dígitos" required><span class="barra"></span>
                    <label class="datos-form" for="">Número De Contacto</label>
                </div>
                <div class="grupo">
                    <h4>Fecha de nacimiento</h4>
                    <input type="date" name="" id="fecha-nacimiento" required>
                    <input type="file" id="imagenPrevisualizacion" accept="image/*" />
                    <label class="foto-form" for="imagenPrevisualizacion">Foto de perfil</label>  
                        <img id="imagenPrevisualizacion01" >
                        <script src="js/script_ImagenPrevisualizacion.js"></script>
                        <br>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="correo" required><span class="barra"></span>
                    <label class="datos-form" for="">Correo Electrónico</label>
                </div>
               
                <div class="grupo">
                    <input type="text" name="" id="contraseña"  title= "La contraseña debe de tener: 8 carácteres, 1 número, 1 mayúscula, 1 minúscula, 1 carácter especial (¡”#$%&/=’?¡¿:;,.-_+*{][}) y sin espacios en blanco" onclick="ContraseñaOnclick()" required>
                    <span class="barra"></span>
                    <label class="datos-form" for="">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="confirmarcontraseña" required>
                    <span class="barra"></span>
                    <label class="datos-form" for="">Confirmar Contraseña</label>
                </div>   
                <button type="submit">Registrarme</button>
            </div>
        </form>               
    </body>    
    
    
</body>

</html>