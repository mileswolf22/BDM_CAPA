<?php

    include_once 'C_CuadroNoticia_Reportero.php';
    $extend = new cargaNotiReportero();
    $extend2 = new cargaNotiReportero();
                
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

        $extend->Noticia_Revision();

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