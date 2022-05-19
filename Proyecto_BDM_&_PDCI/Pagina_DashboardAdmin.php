<?php 
      session_start();
      
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaDashboardAdmin.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        
        

        

        <?php  include ('./headUsuario.php')?>
    
    </head>


    <body>


    <?php  include ('./headerAdministrador.php')?>

<main>


    <section class="contenedor-Bienvenida">
        <br><br>

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="recursos/imagenes/banner01.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="recursos/imagenes/banner02.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="recursos/imagenes/banner03.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
    </section>

    <section class="contenedor">

    

    <div class="HerramientasAdministrador">

    <abbr title="Agregar Noticia"><a href="Pagina_CrearNoticia.php" class="categoria" id="AdministrarNoticias"><img class="HerramientaAdminImg" src="recursos/imagenes/iconos/edit-alt-solid-60.png"/></a></abbr>
    <b href="#"> | </b>     

    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="recursos/imagenes/iconos/user-solid-60.png"/>
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item" href="Pagina_RegistroEditor.php">Agregar Usuario</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="Pagina_SolicitudesDeBaja.php">Solicitudes De Baja</a></li>
  </ul>

  <b href="#"> | </b>
    
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="recursos/imagenes/iconos/user-account-solid-60.png"/>
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item" href="Pagina_CrearSeccion.php">Agregar Sección</a></li>
    <li><a class="dropdown-item" href="Pagina_ModificarSeccion.php">Modificar Sección</a></li>
    <li><a class="dropdown-item" href="Pagina_EliminarSeccion.php">Eliminar Sección</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="Pagina_OrdenSeccion.php">Modificar Orden</a></li>
  </ul>

    <b href="#"> | </b>
    <abbr title="Reporte De Noticias"><a href="Pagina_ReporteNoticias.php" class="categoria" id="PerfilCategoria"><img class="HerramientaAdminImg" src="recursos/imagenes/iconos/user-badge-solid-60.png"/></a></abbr>
  

    </div>

    <br>

    </section>
    
    <section class="barraContenedor">
            <br>
        </section>

        <?php  
     
     $RolUsuario = $_SESSION['RolHeader'];
     
     switch ( $RolUsuario ) {
       case 'Editor':
        
        include ('./RevisionNoticias.php');
         break;
         case 'Reportero':
        
          include ('./MisNoticiasPendientes.php');
           break;
      }
    
     ?>
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>