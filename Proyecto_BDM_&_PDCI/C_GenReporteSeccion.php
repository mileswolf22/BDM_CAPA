<?php
include_once 'C_database.php';


class GenRepo extends Database{


function GenRepo1(){

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
        header("Location: Pagina_ReporteNoticias.php");
}


function GenRepo2(){

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
        header("Location: Pagina_ReporteNoticias.php");
}


function GenRepo3(){

}

}





    
      
    
?>