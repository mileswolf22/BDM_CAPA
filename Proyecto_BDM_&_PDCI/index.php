<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The Universe</title>
        <link rel="shortcut icon" href="recursos/imagenes/theUniverse_icon.png">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/estilos_Footer.css">
        <link rel="stylesheet" href="css/estilos_Loader.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/script_Loader.js"></script>
    
    </head>


    <body class="hidden">

    <div class="loader"></div>

        <header>
            <nav>
                <a href="Pagina_IniciarSesion.php" id="enlace-iniciarSesion" class="btn-header">Iniciar Sesión</a>
                <b href="#"> | </b>
                <a href="Pagina_IniciarSesionInvitado.php">Cuenta Invitado</a>
                <b href="#"> | </b>
                <a href="Pagina_RegistroUsuario.php" id="enlace-Registrarse" class="btn-header">Registrarse</a>
                <br><br>
            </nav>

            <section class="textos-header">
                <h2>THE UNIVERSE</h2>
                <h3>El Universo En Tus Manos</h3>
            </section>

        </header>

        <section class="noticias contenedor">

            <br><br><br><br>

            <h3>LAS ULTIMAS NOTICIAS A TU MANO</h3>
            <p>Hacemos que el universo este a tu alcance</p>

            <br><br>

            <div class="galeria-noticias">
                
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/programacion1.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Ultimas Noticias</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/programacion2.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Local</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/programacion3.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Nacional</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/diseño1.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Internacional</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/diseño2.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Espectáculos</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/diseño3.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Deportes</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/marketing1.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Economía</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/marketing2.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Salud</h4>
                    </div>
                </div>
                <div class="cont-noticias">
                    <div class="img-noticias">
                        <img src="recursos/imagenes/marketing3.jpeg" alt="">
                    </div>
                    <div class="textos-noticias">
                        <h4>Tecnología</h4>
                    </div>
                </div>
            </div>

            <br><br><br><br>
        </section>

        


        <?php  include ('./footer.php')?>

    </body>

</html>