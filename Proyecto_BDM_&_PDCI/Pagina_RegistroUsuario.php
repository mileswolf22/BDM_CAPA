
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
        <form class="login"  id='form_registro' action= 'C_Registro_usuario.php' method='Post'>
            <div class="form">
                <h1>Registro</h1>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" required><span class="barra"></span>
                    <label class="datos-form" for="">Nombre Completo</label>
                </div>
                <div class="grupo">
                    <input type="text" name="numeroContacto" id="numeroContacto" pattern="[0-9]{10}" title="El número debe ser a 10 dígitos" required><span class="barra"></span>
                    <label class="datos-form" for="">Número De Contacto</label>
                </div>
                <div class="grupo">
                    <h4>Fecha de nacimiento</h4>
                    <input type="date" name="fecha-nacimiento" id="fecha-nacimiento" required>


                    <input type="file" name="imagenPrevisualizacion" id="imagenPrevisualizacion" accept="image/*" />
                 
                    <label class="foto-form" for="imagenPrevisualizacion">Foto de perfil</label>  
                        <img id="imagenPrevisualizacion01" > 
                       
                    <div class="grupo">
                    <input type="file" class="datos-form" id="image" name="image" multiple>
                    </div>

                    

                        <script src="js/script_ImagenPrevisualizacion.js"></script>
                        <br>
                </div>
                <div class="grupo">
                    <input type="text" name="correo" id="correo" required><span class="barra"></span>
                    <label class="datos-form" for="">Correo Electrónico</label>
                </div>
                <div class="grupo">
                    <input type="text" name="usuario" id="usuario" title="El usuario debe de ser de mínimo 9 a máximo 15 caracteres que solo contengan letras y números" required><span class="barra"></span>
                    <label class="datos-form" for="">Usuario</label>
                </div>
                <div class="grupo">
                    <input type="text" name="contraseña" id="contraseña"  title= "La contraseña debe de tener: 8 carácteres, 1 número, 1 mayúscula, 1 minúscula, 1 carácter especial (¡”#$%&/=’?¡¿:;,.-_+*{][}) y sin espacios en blanco" onclick="ContraseñaOnclick()" required>
                    <span class="barra"></span>
                    <label class="datos-form" for="">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="text" name="confirmarcontraseña" id="confirmarcontraseña" required>
                    <span class="barra"></span>
                    <label class="datos-form" for="">Confirmar Contraseña</label>
                
                </div>   
                <button type="submit">Registrarme</button>
            </div>
        </form>               
    </body>    
    
    
</body>

</html>