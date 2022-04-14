
<?php 
  session_start();


if (isset($_SESSION['SoyUnRobot'])){

    if ($_SESSION['SoyUnRobot'] == "NoEsRobot")
    {
        echo'<script type="text/javascript">
            console.log("No es robot");
            </script>';
    } else {

        echo'<script type="text/javascript">
            alert("¿Eres un robot? Intentalo de nuevo c:");
            </script>';
            $_SESSION['SoyUnRobot'] = "NoEsRobot";
    }
    
} else{

    echo'<script type="text/javascript">
            console.log("No ha hecho nada");
            </script>';
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
    <script src="js/script_ValidadorContraseña.js"></script>
    <script src="js/script_ValidadorCorreo.js"></script>
    <script src="js/script_ValidadorFecha.js"></script>
    <script src="js/script_ValidadorNumeroTelefonico.js"></script>
    <script src="js/script_ValidadorUsuario.js"></script>
    <script src="js/script_ValidadorNombre.js"></script>
    
    <script src='https://www.google.com/recaptcha/api.js?render=6Lc9y2cfAAAAAM9UqsURq4txmASupJwWrI8ogzm1'> </script>

</head>

<body class="bodyRegistro">
    <div class="loader"></div>


    <body class="bodyRegistro">
        
        <form class="login"  id='form_registro' action= 'C_Registro_usuario.php' method='Post' enctype="multipart/form-data">
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


                    <div id="inputFileImg">
                    <input type="file" name="imagenPrevisualizacion" id="imagenPrevisualizacion" accept="image/*" required/>
                    <label class="foto-form" id="foto-form" for="imagenPrevisualizacion">Foto de perfil</label> 
                   </div>    
                        <img id="imagenPrevisualizacion01"  > 
                        <script src="js/script_ImagenPrevisualizacion.js"></script>
                        
                </div>
                
                    
                    
                <div class="grupo">
                    <input type="text" name="correo" id="correo" required><span class="barra"></span>
                    <label class="datos-form" for="">Correo Electrónico</label>
                </div>
                <div class="grupo">
                    <input type="text" name="usuario" id="usuario" title="El usuario debe de ser de mínimo 9 a máximo 15 caracteres que solo contengan letras y números" required><span class="barra"></span>
                    <label class="datos-form" for="">Usuario</label>

                    <!--
                    <button type="button" class="foto-form" >Verificar Usuario</button>

                
                    <script type="text/javascript">


                        $(document).ready(function(){
                         
                         var consulta;
                                
                         //hacemos focus
                         $("#usuario").focus();
                                                                    
                         //comprobamos si se pulsa una tecla
                         $("#usuario").keyup(function(e){
                                //obtenemos el texto introducido en el campo
                                consulta = $("#usuario").val();
                                                         
                       
                                           $.ajax({
                                                 type: "POST",
                                                 url: "C_ValidarUsuario.php",
                                                 data: "b="+consulta,
                                                 dataType: "html",
                                                 error: function(){
                                                    //   alert("error petición ajax");
                                                 },
                                                 success: function(data){                                                      
                                                   // alert("Se logro wuuu");
                                                 }
                                                   });
                                             
                        });
                    });

              

                 

                        </script>
                    
                          -->
                    
                   
                   

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
                <div class="grupo">
                  <input type="hidden" name="recaptchaResponse" id="recaptchaResponse" value="19BS">
                  <script>

                     setTimeout(Recaptcha, 15000);

                    function Recaptcha() {
                       grecaptcha.ready( function() {
                       grecaptcha.execute('6Lc9y2cfAAAAAM9UqsURq4txmASupJwWrI8ogzm1', {action: 'ejemplo'})
                       .then(function(token) {
                          var recaptchaResponse = document.getElementById('recaptchaResponse');
                          recaptchaResponse.value = token;
                       });});

                    }
                  </script>
                </div>

                <button type="submit">Registrarme</button>
            </div>
        </form>               
    </body>    
    
    
</body>

</html>