
<?php
      session_start();
      $_SESSION['TITULO_NOTICIA'] = '';

      include_once 'C_CuadroNoticia.php';

?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaPrincipalUsuarios.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        

        <?php  include ('./headUsuario.php')?>
    
    </head>


    <body class="hidden">

<!-- ?php  include ('./headerUsuario.php')? -->
     <?php  
     
     $RolUsuario = $_SESSION['RolHeader'];
     
     switch ( $RolUsuario ) {
       case 'Editor':
        
        include ('./headerAdministrador.php');
         break;
       case 'Reportero':
         include ('./headerAdministrador.php');
          break;
       case 'Usuario':
        include ('./headerUsuario.php');
         break;
        default:
        include ('./headerUsuarioNoLoggeado.php');
        break;
      }
    
     ?>

<main>

    
    <section class="contenedor-Bienvenida">
        <br><br>
        <h2>THE UNIVERSE</h2>
        <h3>El Universo En Tus Manos</h3>

    </section>
    
    <section class="contenedor-Marqee">
        <marquee class="VisorNoticias">Noticias De Ultima Hora: Si los testimonios son confiables la seguridad anti-niños se rompio por primera vez en la historia, no podemos confirmar o negar la presencia de un niño humano aqui: Un niño floto sobre mi y volo un auto con su rasho laser, quize ocultarme pero me levanto con sus poderes mentales y me sacudio, es cierto lo vi con mis 18 ojos. En mi opinion profesional es tiempo para PANICOOOOO!!!!!!!</marquee>
    </section>

    <section class="contenedor">

        <h2 class="titulo-nosotros">Noticias Recientes</h2>

        <?php
        $con=mysqli_connect('localhost','root','root','notidb');
        $extend = new CargaNoticias();

        $query_mostrar = "CALL TraerPeliculas()";
        $result = mysqli_query ($con, $query_mostrar);
        $contador = 0;
            while($row = mysqli_fetch_row($result))
            {   
           $extend-> Noticia_Aprobada();
           ?>
<br><br>
           <?php
            }

        ?>

          
       
    </section>

    <section class="contenedor">

        <h2 class="titulo-nosotros"> Noticias Mas Vistas</h2>

        <div class="noticiasCard">
            <div class="NotiCard">
           <div class="card" style="width: 18rem;">
              <h3 class="card-header" style="background-color:purple" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/buildings-regular-24.png" /> </h3>
             <div class="card-body">
               <h5 class="card-title">Rusia lanza bombardeos a Ucrania </h5>
               <p class="card-text">Rusia realiza bombardeos en contra de Ucrania pese a constantes peticiones de cese al fuego por parte de naciones vecinas</p>
               <a href="#" class="card-link">Ver más</a>
             </div>
            </div>
            </div>



            <div class="NotiCard">
            <div class="card" style="width: 18rem;">
              <h3 class="card-header" style="background-color:pink" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/phone-solid-24.png" /> </h3>
             <div class="card-body">
               <h5 class="card-title">Apple lanza su nuevo llamado ciber guardian </h5>
               <p class="card-text">Apple ha vuelto a soprender a todos sus usuarios lanzando al mercado un potente guardian que podrá proteger a su portador</p>
               <a href="#" class="card-link">Ver más</a>
             </div>
            </div>
            </div>


        
            <div class="NotiCard">
            <div class="card" style="width: 18rem;">
              <h3 class="card-header" style="background-color:lime" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/restaurant-regular-24.png" /> </h3>
             <div class="card-body">
               <h5 class="card-title">Se descubre el ingrediente secreto de la Coca Cola </h5>
               <p class="card-text">Descripcion: Un usuario de Twitter se ha topado con el ingrediente secreto de la Coca cola mientras trataba de tomar una Pepsi frente a sus oficinas.</p>
               <a href="#" class="card-link">Ver más</a>
             </div>
            </div>
          </div>
        </div>
        
    </section>

    <section class="contenedor">

        <h2 class="titulo-nosotros"> Tecnología</h2>

        <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" style="background-color:pink" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/phone-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title">Nuevo teléfono celular con capacidad de proyectar memes</h5>
            </div>
            
            <img src="recursos/imagenes/Ejemplos/Seccion/1.1.jpg" class="d-block user-select-none" width="100%" height="200"/>
            <div class="card-body">
              <p class="card-text">La empresa One ha implementado, en su más reciente modelo de celular, un proyecto que nos permite visualizar memes como un espectáculo</p>
            </div>
            <div class="card-body">
              <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>

        <div class="NotiCard">
            <div class="card mb-3">
                <h3 class="card-header" style="background-color:pink"> <img class="iconCard" src="recursos/imagenes/iconos/phone-solid-24.png" /> </h3>
                <div class="card-body">
                  <h5 class="card-title">Teléfono Android capaz de comunicarse con civilizaciones extraterrestres</h5>
                </div>
                
                <img src="recursos/imagenes/Ejemplos/Seccion/1.2.jpg" class="d-block user-select-none" width="100%" height="200"/>
                <div class="card-body">
                  <p class="card-text">Contando con una antena con potencia de grado militar, el teléfono Roughe es capaz de mandar mensajes a través del espacio</p>
                </div>
                <div class="card-body">
                  <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
            </div>
  
        </div>
    </section>

    <section class="contenedor">

        <h2 class="titulo-nosotros"> Universo</h2>

        <div class="noticiasCard">
           <div class="NotiCard">
             <div class="card mb-3">
                <h3 class="card-header" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/planet-solid-24.png" /> </h3>
           <div class="card-body">
          <h5 class="card-title">Extraterrestres podrían habitar en las cuevas de marte</h5>
       </div>
    
        <img src="recursos/imagenes/Ejemplos/Seccion/2.1.jpeg" class="d-block user-select-none" width="100%" height="200"/>
       <div class="card-body">
       <p class="card-text">Según recientes investigaciones, los extraterrestres del planeta Marte podrían vivir resguardados debajo de la tierra de su mundo</p>
       </div>
      <div class="card-body">
        <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
       </div>
       <div class="card-footer text-muted">
        2 days ago
      </div>
      </div>
     </div>

      <div class="NotiCard">
     <div class="card mb-3">
         <h3 class="card-header"> <img class="iconCard" src="recursos/imagenes/iconos/planet-solid-24.png" /> </h3>
        <div class="card-body">
          <h5 class="card-title">Tom Cruise es invitado a ser astronauta de honor </h5>
        </div>
        
        <img src="recursos/imagenes/Ejemplos/Seccion/2.2.jpg" class="d-block user-select-none" width="100%" height="200"/>
        <div class="card-body">
          <p class="card-text">Tom Cruise ha sido invitado a protagonizar el lanzamiento del nuevo cohete de la NASA con destino a Venus</p>
        </div>
        <div class="card-body">
          <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
     </div>

      </div>
    </section>
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>