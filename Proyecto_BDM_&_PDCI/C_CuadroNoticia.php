<?php
    
$_SESSION['tituloA'] = NULL;
$_SESSION['tituloR'] = NULL;
$_SESSION['tituloD'] = NULL;
$_SESSION['tituloP'] = NULL;
$_SESSION['tituloN'] = NULL;
//ESTA PAGINA PUEDE USARSE PARA LA CARGA DE NOTICIAS EN  PANTALLA PARA LOS ADMINS Y EN PARTE PARA LOS USUARIOS NORMALES

//LA IDEA ESTA EN QUE SEA LA FORMA DE PODER CARGAR LAS NOTICIAS (DEPENDIENDO DE SU STATUS) DE MANERA DINAMICA, USANDO
//LA FUNCION ADECUADA TODAS LAS VECES QUE SEA NECESARIO
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    class CargaNoticias{

        function Noticia_Aprobada(){
          $con=mysqli_connect('localhost','root','root','notidb');
          $query = "SELECT * FROM Noticia WHERE Aprobada = 1";
          $result = mysqli_query($con, $query);
          $rows =  mysqli_num_rows($result);
          if($rows > 0){

            $con=mysqli_connect('localhost','root','root','notidb');
            $server = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "notidb";
        
        
            $conn = new PDO(
                "mysql:host=$server;dbname=$dbname","$username","$password");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $con=mysqli_connect('localhost','root','root','notidb');
            $query_mostrar = "CALL Mostrar_Noticia_Portada_A()";
            $result3 = mysqli_query ($con, $query_mostrar);
                
                while($row = mysqli_fetch_row($result3))
                {   
                    $_SESSION['numeroA']                             = $row[0]; 
                    $_SESSION['seccionA']                            = $row[1]; 
                    $_SESSION['tituloA']                             = $row[2];
                    $_SESSION['descripcionA']                        = $row[3];
                    
                }

            ?>
            <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaPrincipalUsuarios.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        

    </head>
            <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria" style="background-color:yellow"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title"><?php echo$_SESSION['tituloA']?></h5>
              <input type="hidden" name="num" id="num" value = <?php echo$_SESSION['numeroA']?>>
            </div>
            
                <?php
                    $temp = $_SESSION['numeroA'];
                    $stmt = $conn->prepare("CALL Cargar_Imagen('$temp')");
                    $stmt->execute();
                    $lista_imagenes = $stmt->fetchAll(); 
                    foreach($lista_imagenes as $imagen) {
                    ?>
                    <!-- <img src=  class="d-block user-select-none" width="100%" height="200"/> -->
                    <img class="img-thumbnail" src="./recursos/imagenes/<?=$imagen['imagen']?>"  width='300' height='200'>
                    <?php
                    }
                    ?>  

            <div class="card-body">
              <p class="card-text"><?php echo$_SESSION['descripcionA']?></p>
            </div>
            <div class="card-body">
           
              <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>

              <?php
             
                $_SESSION['TituloProvisionalA'] = $_SESSION['tituloA'];
              
              ?>

            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>

        <?php
        }

      }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        function Noticia_Negada(){

          $con=mysqli_connect('localhost','root','root','notidb');
          $query = "SELECT * FROM Noticia WHERE No_Aprobada = 1";
          $result = mysqli_query($con, $query);
          $rows =  mysqli_num_rows($result);
          if($rows > 0){

            $con=mysqli_connect('localhost','root','root','notidb');
            $server = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "notidb";
        
        
            $conn = new PDO(
                "mysql:host=$server;dbname=$dbname","$username","$password");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $con=mysqli_connect('localhost','root','root','notidb');
            $query_mostrar = "CALL Mostrar_Noticia_NA()";
            $result4 = mysqli_query ($con, $query_mostrar);
                
                while($row = mysqli_fetch_row($result4))
                {   
                    $_SESSION['numeroN']                             = $row[0]; 
                    $_SESSION['seccionN']                            = $row[1]; 
                    $_SESSION['tituloN']                             = $row[2];
                    $_SESSION['descripcionN']                        = $row[3];
                }

            ?>
            <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria" style="background-color:yellow"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title"><?php echo$_SESSION['tituloN']?></h5>
              <input type="hidden" name="num" id="num" value = <?php echo$_SESSION['numeroN']?>>
            </div>
            
                <?php
                    $temp = $_SESSION['numeroN'];
                    $stmt = $conn->prepare("CALL Cargar_Imagen('$temp')");
                    $stmt->execute();
                    $lista_imagenes = $stmt->fetchAll(); 
                    foreach($lista_imagenes as $imagen) {
                    ?>
                    <!-- <img src=  class="d-block user-select-none" width="100%" height="200"/> -->
                    <img class="img-thumbnail" src="./recursos/imagenes/<?=$imagen['imagen']?>"  width='300' height='200'>
                    <?php
                    }
                    ?>  

            <div class="card-body">
              <p class="card-text"><?php echo$_SESSION['descripcionN']?></p>
            </div>
            <div class="card-body">
            
              <a href="Pagina_NoticiaN.php" class="card-link" name ="VerMas">VER MAS</a>
              <?php
             
                $_SESSION['TituloProvisionalN'] = $_SESSION['tituloN'];
              
              
              ?>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>

        <?php 
        }
      }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        function Noticia_Revision(){
          $con=mysqli_connect('localhost','root','root','notidb');
          $query = "SELECT * FROM Noticia WHERE Revision = 1";
          $result = mysqli_query($con, $query);
          $rows =  mysqli_num_rows($result);
          if($rows > 0){

            $con=mysqli_connect('localhost','root','root','notidb');
            $server = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "notidb";
        
        
            $conn = new PDO(
                "mysql:host=$server;dbname=$dbname","$username","$password");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $con=mysqli_connect('localhost','root','root','notidb');
            $query_mostrar = "CALL Mostrar_Noticia_R()";
    $result2 = mysqli_query ($con, $query_mostrar);
        
        while($row = mysqli_fetch_row($result2))
        {   
            $_SESSION['numeroR']                             = $row[0]; 
            $_SESSION['seccionR']                            = $row[1]; 
            $_SESSION['tituloR']                             = $row[2];
            $_SESSION['descripcionR']                        = $row[3];
        }

            ?>
            <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria" style="background-color:yellow"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title"><?php echo$_SESSION['tituloR']?></h5>
              <input type="hidden" name="num" id="num" value = <?php echo$_SESSION['numeroR']?>>
            </div>
            
                <?php
                    $temp = $_SESSION['numeroR'];
                    $stmt = $conn->prepare("CALL Cargar_Imagen('$temp')");
                    $stmt->execute();
                    $lista_imagenes = $stmt->fetchAll(); 
                    foreach($lista_imagenes as $imagen) {
                    ?>
                    <!-- <img src=  class="d-block user-select-none" width="100%" height="200"/> -->
                    <img class="img-thumbnail" src="./recursos/imagenes/<?=$imagen['imagen']?>"  width='300' height='200'>
                    <?php
                    }
                    ?>  

            <div class="card-body">
              <p class="card-text"><?php echo$_SESSION['descripcionR']?></p>
            </div>
            <div class="card-body">
          
              <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>
              <?php
              
                $_SESSION['TituloProvisionalR'] = $_SESSION['tituloR'];
              
              
              ?>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>

        <?php 
        }
      }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        function Noticia_Devuelta(){
          $con=mysqli_connect('localhost','root','root','notidb');
          $query = "SELECT * FROM Noticia WHERE Devuelta = 1";
          $result = mysqli_query($con, $query);
          $rows =  mysqli_num_rows($result);
          if($rows > 0){

            $con=mysqli_connect('localhost','root','root','notidb');
            $server = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "notidb";


	$conn = new PDO(
		"mysql:host=$server;dbname=$dbname","$username","$password");
	
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $con=mysqli_connect('localhost','root','root','notidb');
            $query_mostrar = "CALL Mostrar_Noticia_D()";
    $result2 = mysqli_query ($con, $query_mostrar);
        
        while($row = mysqli_fetch_row($result2))
        {   
            $_SESSION['numeroD']                             = $row[0]; 
            $_SESSION['seccionD']                            = $row[1]; 
            $_SESSION['tituloD']                             = $row[2];
            $_SESSION['descripcionD']                        = $row[3];
        }


            ?>
            <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria" style="background-color:yellow"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title"><?php echo$_SESSION['tituloD']?></h5>
              <input type="hidden" name="num" id="num" value = <?php echo$_SESSION['numeroD']?>>
            </div>
            
                <?php
                    $temp = $_SESSION['numeroD'];
                    $stmt = $conn->prepare("CALL Cargar_Imagen('$temp')");
                    $stmt->execute();
                    $lista_imagenes = $stmt->fetchAll(); 
                    foreach($lista_imagenes as $imagen) {
                    ?>
                    <!-- <img src=  class="d-block user-select-none" width="100%" height="200"/> -->
                    <img class="img-thumbnail" src="./recursos/imagenes/<?=$imagen['imagen']?>"  width='300' height='200'>
                    <?php
                    }
                    ?>  

            <div class="card-body">
              <p class="card-text"><?php echo$_SESSION['descripcionD']?></p>
            </div>
            <div class="card-body">
            
              <a href="Pagina_NoticiaD.php" class="card-link" name="VerMasD">VER MAS</a>
              <?php
              
                $_SESSION['TituloProvisionalD'] = $_SESSION['tituloD'];
    
              
              ?>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>

        <?php 
        }
      }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        function Noticia_Pendiente(){
     
          $con=mysqli_connect('localhost','root','root','notidb');
          $query = "SELECT * FROM Noticia WHERE Pendiente = 1";
          $result = mysqli_query($con, $query);
          $rows =  mysqli_num_rows($result);
          if($rows > 0){

            $con=mysqli_connect('localhost','root','root','notidb');
            $server = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "notidb";
        
        
            $conn = new PDO(
                "mysql:host=$server;dbname=$dbname","$username","$password");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query_mostrar = "CALL Mostrar_Noticia_P()";
            $result = mysqli_query($con, $query_mostrar);
                
                while($row = mysqli_fetch_row($result))
                {   
                    $_SESSION['numeroP']                             = $row[0]; 
                    $_SESSION['seccionP']                            = $row[1]; 
                    $_SESSION['tituloP']                             = $row[2];
                    $_SESSION['descripcionP']                        = $row[3];
                }

            ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="css/estilos_PaginaNoticia.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    
    </head>

            <div class="noticiasCard">
            <div class="NotiCard">
        <div class="card mb-3">
            <h3 class="card-header" id="cardCategoria" style="background-color:yellow"> <img class="iconCard" src="recursos/imagenes/iconos/movie-play-solid-24.png" /> </h3>
            <div class="card-body">
              <h5 class="card-title"><?php echo$_SESSION['tituloP']?></h5>
              <input type="text" name="num" id="num" value = <?php echo$_SESSION['numeroP']?>>
            </div>
            
                <?php
                    $temp3 = $_SESSION['numeroP'];
                    $stmt = $conn->prepare("CALL Cargar_Imagen('$temp3')");
                    $stmt->execute();
                    $lista_imagenes = $stmt->fetchAll(); 
                    foreach($lista_imagenes as $imagen) {
                    ?>
                    <!-- <img src=  class="d-block user-select-none" width="100%" height="200"/> -->
                    <img class="img-thumbnail" src="./recursos/imagenes/<?=$imagen['imagen']?>"  width='300' height='200'>
                    <?php
                    }
                    ?>  

            <div class="card-body">
              <p class="card-text"><?php echo$_SESSION['descripcionP']?></p>
            </div>
            <div class="card-body">
          
              <a href="Pagina_Noticia.php" class="card-link">VER MAS</a>

              <?php
             
                $_SESSION['TituloProvisionalP'] = $_SESSION['tituloP'];
              
              ?>

            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>

        <?php 
        }

    }
  }
  ?>
