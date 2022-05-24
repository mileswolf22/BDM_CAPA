<?php

session_start();
$servidor= "localhost";
$usuario= "root";
$password = "root";
$nombreBD= "notidb";
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}


$_POST['seccion'] = '';
$_POST['fecha'] = '';
$_POST['titulo'] = '';
$_POST['positivos'] = '';

$con=mysqli_connect('localhost','root','root','notidb');
//Metodo a utikizar
//$sql = $conexion->query($query);

include_once 'C_GenReporteSeccion.php';

$extends = new GenRepo(); 
?>

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

<form action = "Pagina_ReporteNoticias.php" method = "POST" id = "form">
    <select class="form-select form-select-lg mb-3" name= RepoOpciones id = RepoIOpciones aria-label=".form-select-lg example">
  <option selected>Seleccionar Tipo De Tabla</option>
  <option value="1">Detalle de Noticias</option>
  <option value="2">Detalle de Secciones</option>
  <OPTION value="3">Detalle de Autores</option>
</select>
<br><br><br><br>

<?php

$eleccion = (isset($_REQUEST['RepoOpciones'])) ? $_REQUEST['RepoOpciones'] : '';


if($eleccion == 1){

  $query = "SELECT Seccion_principal, Fecha_publicacion, Titulo, Positivos FROM datos_noticia";
  $con=mysqli_connect('localhost','root','root','notidb');
  $result = mysqli_query ($con, $query);
      
      while($row = mysqli_fetch_row($result))
      {   
          $_POST['seccion']                            = $row[0]; 
          $_POST['fecha']                              = $row[1];
          $_POST['titulo']                             = $row[2]; 
          $_POST['positivos']                          = $row[3]; 
     ?>
  
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
        <th scope="row"><?php echo $_SESSION['seccion'];?></th>
        <td><?php echo $_SESSION['fecha'];?></td>
        <td><?php echo $_SESSION['titulo'];?></td>
        <td><?php echo $_SESSION['positivos'];?></td>
        <td></td>
      </tr>

          <?Php
      }
      

}

if($eleccion == 2){
  $query = "SELECT * FROM datos_seccion";
  $con=mysqli_connect('localhost','root','root','notidb');
      $result = mysqli_query ($con, $query);
          
          while($row = mysqli_fetch_row($result))
          {   
              $_POST['seccion']                            = $row[0]; 
              $_POST['color']                              = $row[1];
              $_POST['noticia']                            = $row[2]; 
      
         ?>
      
      <section class="contenedor">
      
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Seccion</th>
            <th scope="col">Color Insignia</th>
            <th scope="col">Noticias Enlazadas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo $_SESSION['seccion'];?></th>
            <td><?php echo $_SESSION['seccion'];?></td>
            <td><?php echo $_SESSION['color'];?></td>
            <td><?php echo $_SESSION['noticia'];?></td>
            <td></td>
          </tr>
              <?Php
          }
         
  }



if($eleccion == 3){

    $extends -> GenRepo3();

}
?> 

<button  type = "submit" class="buttonNoticiaEsh" name = "GenRepo" id = "GenRepo" >Generar Reporte</button> 
          
</form>

    </section>

  </tbody>
</table>


    </section>
    
    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>