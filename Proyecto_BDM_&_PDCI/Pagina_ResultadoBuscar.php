<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_ResultadoBuscar.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>


        

        <?php  include ('./headUsuario.php')?>
    
    </head>


    <body">


    <?php  include ('./headerUsuario.php')?>

<main>


    <section class="contenedor">

    <br><br>
    <h2 class="titulo-nosotros">Resultado</h2>

    <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title">¡Por fin sale la pelicula de Sherk 5 en este 2022!</h5>
              <h6 class="card-subtitle text-muted">Espectáculos</h6>
            </div>
            
            <img src="recursos/imagenes/diseño1.jpeg" class="d-block user-select-none" width="100%" height="200"/>
            <div class="card-body">
              <p class="card-text">Es extraño pero por fin despues de tanto tiempo de espera ya sale Sherk 5. Esperenla pronto en cines.</p>
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