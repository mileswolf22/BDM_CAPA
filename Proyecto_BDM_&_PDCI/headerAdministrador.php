<?php

$con=mysqli_connect('localhost','root','root','notidb');

$temp = $_SESSION["US"];
$query_mostrar = "CALL Mostrar_Usuario('$temp')";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_SESSION['nom_us']             = $row[0]; 
        $_SESSION['nom_com']            = $row[1]; 
        base64_encode($_SESSION['foto']               = $row[2]);
        $_SESSION['correo']             = $row[3];
        $_SESSION['num_contact']        = $row[4];
        $_SESSION['fecha']             = $row[5];

    }
?>
<div class="loader"></div>

    <header>
        <nav class="nav-menu">
            <div class="usuariobienvenida">
                <a href="Pagina_PerfilUsuario.php" class="">
                <img class="imagen-perfilusuario" src="data:image/jpg;base64, <?php echo "".base64_encode($_SESSION['foto']); ?>" width="60" height="60">
                <h1 class="bienvenida_usuario"> Bienvenido</h1>
                <h1 class="nombre_usuario" id="nombre_usuario"> <?php echo $_SESSION["US"];?> </h1> 
            </a></div>
            <abbr title="Dashboard Noticias"><a href="Pagina_DashboardAdmin.php" class="categoria" id="AdministrarNoticias"><img src="recursos/imagenes/iconos/time-solid-24.png"/></a></abbr>
            <b href="#"> | </b> 
            
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
                    <a href="index.php" class="boton">ACEPTAR</a>
                </div>
            </div>
        </div> 
    
    </header>