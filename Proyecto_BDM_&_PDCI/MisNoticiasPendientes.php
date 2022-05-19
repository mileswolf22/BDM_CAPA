<?php

$con=mysqli_connect('localhost','root','root','notidb');
$con2=mysqli_connect('localhost','root','root','notidb');
$con3=mysqli_connect('localhost','root','root','notidb');
$con4=mysqli_connect('localhost','root','root','notidb');
$con5=mysqli_connect('localhost','root','root','notidb');

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "notidb";


	$conn = new PDO(
		"mysql:host=$server;dbname=$dbname","$username","$password");
	
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$temp = $_SESSION["US"];
$query_mostrar = "CALL Mostrar_Noticia_P_Usuario('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['numero']                             = $row[0]; 
        $_SESSION['seccion']                            = $row[1]; 
        $_SESSION['titulo']                             = $row[2];
        $_SESSION['descripcion']                        = $row[3];
    }
   

    $query_mostrar = "CALL Mostrar_Noticia_R_Usuario('$temp')";
    $result2 = mysqli_query ($con2, $query_mostrar);
        
        while($row = mysqli_fetch_row($result2))
        {   
            $_SESSION['numeroR']                             = $row[0]; 
            $_SESSION['seccionR']                            = $row[1]; 
            $_SESSION['tituloR']                             = $row[2];
            $_SESSION['descripcionR']                        = $row[3];
        }


        $query_mostrar = "CALL Mostrar_Noticia_A_Usuario('$temp')";
        $result3 = mysqli_query ($con3, $query_mostrar);
            
            while($row = mysqli_fetch_row($result3))
            {   
                $_SESSION['numeroA']                             = $row[0]; 
                $_SESSION['seccionA']                            = $row[1]; 
                $_SESSION['tituloA']                             = $row[2];
                $_SESSION['descripcionA']                        = $row[3];
            }

            $query_mostrar = "CALL Mostrar_Noticia_NA_Usuario('$temp')";
            $result4 = mysqli_query ($con4, $query_mostrar);
                
                while($row = mysqli_fetch_row($result4))
                {   
                    $_SESSION['numeroNA']                             = $row[0]; 
                    $_SESSION['seccionNA']                            = $row[1]; 
                    $_SESSION['tituloNA']                             = $row[2];
                    $_SESSION['descripcionNA']                        = $row[3];
                }

                $query_mostrar = "CALL Mostrar_Noticia_D_Usuario('$temp')";
                $result5 = mysqli_query ($con5, $query_mostrar);
                    
                    while($row = mysqli_fetch_row($result5))
                    {   
                        $_SESSION['numeroD']                             = $row[0]; 
                        $_SESSION['seccionNA']                            = $row[1]; 
                        $_SESSION['tituloNA']                             = $row[2];
                        $_SESSION['descripcionNA']                        = $row[3];
                    }
?>

<section class="contenedor">

      <h2 class="titulo-nosotros">Mis Noticias Pendientes</h2>

       <div class="noticiasCard">
            

    
       <div class="NotiCard">
                <div class="card mb-3">
                    <h3 class="card-header" style="background-color:purple"> <img class="iconCard" src="recursos/imagenes/iconos/buildings-regular-24.png" /> </h3>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo$_SESSION['titulo']?></h5>

                      <input type="hidden" name="num" id="num" value = <?php echo$_SESSION['numero']?>>
                    </div>

                    <?php
                    $temp = $_SESSION['numero'];
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
                      <p class="card-text"><?php echo$_SESSION['descripcion']?></p>
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

      <h2 class="titulo-nosotros">Mis Noticias En Revisión</h2>

       <div class="noticiasCard">
            


       <div class="NotiCard">
                    <div class="card mb-3">
                        <h3 class="card-header" style="background-color:green"> <img class="iconCard" src="recursos/imagenes/iconos/invader-solid-24.png" /> </h3>
                        <div class="card-body">
                          <h5 class="card-title"> </h5>
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

      <h2 class="titulo-nosotros">Mis Noticias Aprobadas</h2>

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

      <h2 class="titulo-nosotros">Mis Noticias Rechazadas</h2>

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