<?php

    include_once 'C_CuadroNoticia.php';
    $extend = new CargaNoticias();
    $extend2 = new CargaNoticias();
                
?>

<!--------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->

<section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Pendientes</h2>

       <div class="noticiasCard">
            
        <?php
  
           $extend->Noticia_Pendiente();

        ?>

        </div>

    </section>

<!--------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias En Revisión</h2>

       <div class="noticiasCard">
            

       <?php
$con=mysqli_connect('localhost','root','root','notidb');
$query = "SELECT * FROM Noticia WHERE Aprobada = '1'";
$result = mysqli_query($con, $query);
$rows =  mysqli_num_rows($result);
if($rows > 0){
        $extend->Noticia_Revision();
}
      ?>
     

    </section>

<!--------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Aprobadas</h2>

    
      <div class="noticiasCard">
            
            <?php
              $extend->Noticia_Aprobada();
            ?>
    
            </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Rechazadas</h2>

      <div class="noticiasCard">
            
            <?php
    
    $extend->Noticia_Negada();
    
            ?>
    
            </div>
       
    </section>

<!--------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->

    <section class="contenedor">

      <h2 class="titulo-nosotros">Noticias Devueltas</h2>

       <div class="noticiasCard">
            
        <?php

        $extend->Noticia_Devuelta();

        ?>

        </div>

    </section>