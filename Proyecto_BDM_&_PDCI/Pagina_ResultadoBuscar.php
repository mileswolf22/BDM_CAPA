
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
$usuario=(isset($_POST['Texto'])) ? $_POST['Texto'] : '';
$etiqueta=(isset($_POST['menuEtiquetas'])) ? $_POST['menuEtiquetas'] : '';
$seccion=(isset($_POST['menuSecciones'])) ? $_POST['menuSecciones'] : '';
$fecha=(isset($_POST['fecha-Inicio'])) ? $_POST['fecha-Inicio'] : '';

$varEtiqueta = (isset($_POST['Etiqueta'])) ? $_POST['Etiqueta'] : '';
$varSeccion = (isset($_POST['Seccion'])) ? $_POST['Seccion'] : '';

      // if($_POST['Texto'] == ''){$_POST['Texto'] = ' ';};
        $aKeyword = explode(" ", $_POST['Texto']);

        if($_POST['Texto'] = '' AND $_POST['menuEtiquetas'] = '' AND $_POST['menuSecciones'] = '' AND $_POST['fecha-Inicio'] = ''){
            $query = "SELECT * FROM Noticia";
        }
        else{

        if($usuario != ''){
          $query = "SELECT * FROM Noticia WHERE Titulo like '".$usuario."%' ";
         
        }
        else if($varSeccion == "1"){
        if($_POST["menuSecciones"] != ''){
          $query = "SELECT * FROM Noticia WHERE  Seccion_principal = '".$_POST['menuSecciones']."'";
        }

        }
        else if($varEtiqueta == "1"){
        if ($_POST['menuEtiquetas'] != ''){
      
          $query = "SELECT * FROM Noticia WHERE Etiqueta = '".$_POST['menuEtiquetas']."'";
          
        }

      }
        
     /* if($_POST['menuSecciones'] != ''){
          $query .= " AND Seccion_principal = '".$_POST['menuSecciones']."' ";
        }

        else if($_POST['fecha-Inicio'] != ''){
          $query = "SELECT * FROM Noticia WHERE Fecha_publicacion BETWEEN '".$_POST['fecha-Inicio']."' ";
        }
*/
      }

  $sql = $conexion->query($query);

         $numeroSql = mysqli_num_rows($sql);


/* if (empty($_POST['Texto']))
	{
		$where="where nombre like '".$_POST['Texto']."%'";
	}

	else if (empty($_POST['menuEtiquetas']))
	{
		$where="where Etiqueta='".$_POST['menuEtiquetas']."'";
	}

	else
	{
		$where="where Titulo like '".$_POST['Texto']."%' and menuEtiqueta='".$_POST['menuEtiquetas']."'";
	}
*/
?>
    <?php  include ('./headerUsuario.php')?>

<main>





    <section class="contenedor">


    <br><br>
    <h2 class="titulo-nosotros">Resultado</h2>
    
    <?php
while($rowSql = $sql->fetch_assoc()){
?>
    <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title"><?php echo $rowSql['Titulo']; ?></h5>
              <h6 class="card-subtitle text-muted">Espectáculos</h6>
            </div>
            
            <img src="recursos/imagenes/diseño1.jpeg" class="d-block user-select-none" width="100%" height="200"/>
            <div class="card-body">
              <p class="card-text"><?php echo $rowSql['Descripcion']; ?></p>
            </div>
            <div class="card-body">
              <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>
    <?php
}
?>


    </section>

    
</main>

<?php  include ('./footer.php')?>


    </body>

</html>