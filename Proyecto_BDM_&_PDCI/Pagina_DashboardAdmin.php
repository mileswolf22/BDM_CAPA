

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

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Pendientes</h2>

       <div class="noticiasCard">
            


       <div class="NotiCard">
                <div class="card mb-3">
                    <h3 class="card-header" style="background-color:purple"> <img class="iconCard" src="recursos/imagenes/iconos/buildings-regular-24.png" /> </h3>
                    <div class="card-body">
                      <h5 class="card-title">Castores arquitectos dirigen proyecto de edificación</h5>
                    </div>
                    
                    <img src="recursos/imagenes/Ejemplos/Noticias/noticia_2.jpg" class="d-block user-select-none" width="100%" height="200"/>
                    <div class="card-body">
                      <p class="card-text">La Federación de Castores Fundadora Mundial (o por sus siglas FCFM) ha presentado una propuesta para la elaboración de casas para los mas necesitados</p>
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

      <h2 class="titulo-nosotros">Noticias En Revisión</h2>

       <div class="noticiasCard">
            


       <div class="NotiCard">
                    <div class="card mb-3">
                        <h3 class="card-header" style="background-color:green"> <img class="iconCard" src="recursos/imagenes/iconos/invader-solid-24.png" /> </h3>
                        <div class="card-body">
                          <h5 class="card-title">Conocido youtuber desata polémica por NFTs</h5>
                        </div>
                        
                        <img src="recursos/imagenes/Ejemplos/Noticias/noticia_3.jpg" class="d-block user-select-none" width="100%" height="200"/>
                        <div class="card-body">
                          <p class="card-text">El famoso youtuber conocido como Willyrex ínsita a sus seguidores a adentrarse en el mundo de la criptoeconomia</p>
                        </div>
                        <div class="card-body">
                          <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
                        </div>
                        <div class="card-footer text-muted">
                          2 days ago
                        </div>
                      </div>
                    </div>

    </section>

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Aprobadas</h2>

       <div class="noticiasCard">
            


       <div class="NotiCard">
                        <div class="card mb-3">
                            <h3 class="card-header" style="background-color:red"> <img class="iconCard" src="recursos/imagenes/iconos/pizza-solid-24.png" /> </h3>
                            <div class="card-body">
                              <h5 class="card-title">Pizza con piña ¿Amigo o Enemigo?</h5>
                            </div>
                            
                            <img src="recursos/imagenes/Ejemplos/Noticias/noticia_4.jpeg" class="d-block user-select-none" width="100%" height="200"/>
                            <div class="card-body">
                              <p class="card-text">Según un estudio reciente la pizza de piña podría contribuir a un correcto desarrollo neuronal, aunque también esconde un oscuro secreto</p>
                            </div>
                            <div class="card-body">
                              <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
                            </div>
                            <div class="card-footer text-muted">
                              2 days ago
                            </div>
                          </div>
                        </div>

    </section>

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Rechazadas</h2>

       <div class="noticiasCard">
            


       <div class="NotiCard">
                            <div class="card mb-3">
                                <h3 class="card-header" style="background-color:gray"> <img class="iconCard" src="recursos/imagenes/iconos/money-withdraw-regular-24.png" /> </h3>
                                <div class="card-body">
                                  <h5 class="card-title">Mineros de criptomonedas descubren criptoduendes</h5>
                                </div>
                                
                                <img src="recursos/imagenes/Ejemplos/Noticias/noticia_5.png" class="d-block user-select-none" width="100%" height="200"/>
                                <div class="card-body">
                                  <p class="card-text">Mineros de cripto monedas encuentran una extraña raza de duendes mineros mientras realizan profunda expedición en las ciber cuevas</p>
                                </div>
                                <div class="card-body">
                                  <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
                                </div>
                                <div class="card-footer text-muted">
                                  2 days ago
                                </div>
                              </div>
                            </div>

    </section>
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>