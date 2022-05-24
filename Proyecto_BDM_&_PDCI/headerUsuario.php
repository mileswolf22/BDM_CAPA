<?php

$con=mysqli_connect('localhost','root','root','notidb');

$temp = $_SESSION["US"];
$query_mostrar = "CALL Mostrar_Usuario('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['nom_us']                             = $row[0]; 
        $_SESSION['nom_com']                            = $row[1]; 
        base64_encode($_SESSION['foto']                 = $row[2]);
        $_SESSION['correo']                             = $row[3];
        $_SESSION['num_contact']                        = $row[4];
        $_SESSION['fecha']                              = $row[5];

    }


    
?>

<div class="loader"></div>

    <header>
        <nav class="nav-menu">
            <div class="usuariobienvenida">
                <a href="Pagina_PerfilUsuario.php" class="">
                <img class="imagen-perfilusuario" src="data:image/jpg;base64, <?php echo "".base64_encode($_SESSION['foto']); ?>" width="60" height="60">
                <h1 class="bienvenida_usuario"> Bienvenido</h1>
                <h1 class="nombre_usuario" id="nombre_usuario"><?php echo $_SESSION["US"];?></h1> 
            </a></div>
            
            
            <button title="Secciones" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSeccion" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="recursos/imagenes/iconos/intersect-regular-24.png"/>
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
  <li><a class="dropdown-item" href="#">Ultima Hora</a></li>
    <li><a class="dropdown-item" href="#">Espectáculos</a></li>
    <li><a class="dropdown-item" href="#">Deportes</a></li>
    <li><a class="dropdown-item" href="#">Salud</a></li>
  </ul>
  <b href="#"> | </b>

            <abbr title="Buscar"><a href="Pagina_Buscar.php" class="categoria" id="BuscarCatergoria"><img src="recursos/imagenes/iconos/search-alt-2-regular-24.png"/></a></abbr>
            <b href="#"> | </b>
            <abbr title="Perfil"><a href="Pagina_PerfilUsuario.php" class="categoria" id="PerfilCategoria"><img src="recursos/imagenes/iconos/face-regular-24.png"/></a></abbr>
            <b href="#"> | </b>
            <abbr title="Cerrar Sesión" id="CerrarSesionModal"><a class="categoria" id="CerrarSesionCategoria"><img onclick="VentanaModal();" src="recursos/imagenes/iconos/x-circle-solid-24.png"/></a></abbr>

        </nav>

        <nav class="imagen-WooHoo">            
            <a href="Pagina_PrincipalUsuario.php" class="imagen-logo" id="imagen-logo"><img class="imagen-logo" id="logo-principal" src="recursos/imagenes/theUniverse_icon.png"></a>
        </nav>    

        
        <div class="barra"></div> 

        <div class="fondo_transparente">
            <div class="modal">
                <div class="modal_cerrar">
                    <span>x</span>
                </div>
                <div class="modal_titulo">CERRAR SESIÓN</div>
                <div class="modal_mensaje">
                    <p>¿De verdad quieres cerrar sesión? :c</p>
                </div>
                <div class="modal_botones">
                    <a type = "submit" name = "btnAceptar" id = "btnAceptar" href="index.php" class="boton">ACEPTAR</a>
                    <?php
                    

                    ?>
                    <?php
                    /*
                        if (isset(_POST['btnAceptar'])) {
                         //Vaciamos y destruimos las variables de sesión
                
                    $_SESSION['autor']                         = NULL;                         
                    $_SESSION['fechapublicacion']              = NULL;   
                    $_SESSION['fechasuceso']                   = NULL;         
                    $_SESSION['lugarsuceso']                   = NULL;       
                    $_SESSION['titulaso']                      = NULL;  
                    $_SESSION['descripcion']                   = NULL;
                    $_SESSION['texto']                         = NULL;
                    $_SESSION['etiqueta']                      = NULL;
                    $_SESSION['seccionprincipal']              = NULL;
                    $_SESSION['seccionsecundaria']             = NULL;
                    $_SESSION['numeroref']                     = NULL;
                    $_SESSION['titulo']                        = NULL;
                    $_SESSION['rol']                           = NULL;    
                    $_SESSION['US']                            = NULL;
                    $_SESSION['CON']                           = NULL;
                    $_SESSION['nom_us']                        = NULL;     
                    $_SESSION['nom_com']                       = NULL;         
                    $_SESSION['foto']                          = NULL;  
                    $_SESSION['correo']                        = NULL;
                    $_SESSION['num_contact']                   = NULL;
                    $_SESSION['$fecha']                        = NULL;
                    
                    unset($_SESSION['autor']);
                    unset($_SESSION['fechapublicacion']);
                    unset($_SESSION['fechasuceso']);
                    unset($_SESSION['lugarsuceso']);
                    unset($_SESSION['titulaso']);
                    unset($_SESSION['descripcion']);
                    unset($_SESSION['texto']);
                    unset($_SESSION['etiqueta']);
                    unset($_SESSION['seccionprincipal']);
                    unset($_SESSION['seccionsecundaria']);
                    unset($_SESSION['numeroref']);
                    unset($_SESSION['titulo']);
                    unset($_SESSION['rol']);
                    unset($_SESSION['US']);
                    unset($_SESSION['CON']);
                    unset($_SESSION['nom_us']);
                    unset($_SESSION['nom_com']);
                    unset($_SESSION['foto']);
                    unset($_SESSION['correo']);
                    unset($_SESSION['num_contact']);
                    unset($_SESSION['$fecha']);
                    //Redireccionamos a la pagina index.php
                    header('Location: index.php');
                                                        }
                                                        */
                    ?>
                </div>
            </div>
        </div> 
    
    </header>