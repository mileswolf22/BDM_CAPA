

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaNoticia.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>


        

        <?php  include ('./headUsuario.php')?>
    
    </head>


    <body">


    <?php  include ('./headerAdministrador.php')?>

<main>

    <section class="contenedor">

    <br><br><br>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Seleccionar Tipo De Tabla</option>
  <option value="1">Detalle de Noticias</option>
  <option value="2">Detalle de Secciones</option>
</select>

<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Seleccionar Filtro</option>
  <option value="1">Seccion</option>
  <option value="2">Rango De Fechas</option>
</select>



    </section>

    <section class="contenedor">

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Seccion</th>
      <th scope="col">Fecha</th>
      <th scope="col">Noticia</th>
      <th scope="col">Cantidad De Likes</th>
      <th scope="col">Cantidad De Comentarios</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>0</td>
    </tr>
  </tbody>
</table>


    </section>
    
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>