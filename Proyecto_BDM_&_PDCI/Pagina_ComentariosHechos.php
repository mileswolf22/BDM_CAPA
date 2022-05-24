<!-- EN ESTA PAGINA SE CREARAN DINAMICAMENTE LOS COMENTAIRO SSEGUN SE VAYAN PONIENDO
EN RELACION A SU NOTICIA ORIGEN, esta sera para LOS COMENTARIOS HECHOS ANTERIORMENTE EN LA PAGINA -->
<?php
//primeramente traer los daos de la base de datos a mostrarse en la caja
$_POST['id'] = '';
$_POST['key'] = '';
$_POST['user'] = '';
$_POST['foto'] = '';
$_POST['fecha'] = '';
$_POST['texto'] = '';

$con=mysqli_connect('localhost','root','root','notidb');
$query_mostrar = "SELECT * FROM datos_comentario";
$result = mysqli_query ($con, $query_mostrar);
    
    while($row = mysqli_fetch_row($result))
    {   
        $_POST['id']                            = $row[0]; 
        $_POST['idN']                           = $row[1];
        $_POST['user']                          = $row[2]; 
        base64_encode($_POST['foto']            = $row[3]); 
        $_POST['fecha']                         = $row[4]; 
        $_POST['texto']                         = $row[5]; 
        
    };

$usuario_auxiliar = $_POST['user'];
$usuario_logeado = $_SESSION['US'];

?>

<!--Habiendose cargado la data del comentario ahora escribe el cuadro -->

<div class="respuesta Contenedor_0">
                              <div class="grupoRespuesta usuario">
                              <input type="hidden" name="num" id="num" value = <?php echo $_POST['id']?>>
                                  <h4 class="Editado-Respuesta">No Editado</h4>
                                  <h4 class="FechaHora-Respuesta"> <?php echo $_POST['fecha']?> </h4>
                                  <br>
                                  <h4 class="FechaHora-Respuesta"> <?php echo $_POST['user']?> </h4>
                            
                                  <a class="aimagen-usuario" href="Pagina_Perfil.html">
                                      <img class="imagen-usuario" src="data:image/jpg;base64, <?php echo "".base64_encode($_POST['foto']); ?>"></a>
                                      <a class="titulo-usuarioRespuesta" href="Pagina_Perfil.html">0</a>
                                      <hr class="hr-usuarioRespuesta" style="border: 1px solid rgb(73, 64, 140);">
                                    </div>
                                    <div class="grupoRespuesta p">
                                        <p class="respuesta-usuarioRespuesta"> <?php echo $_POST['texto']?> </p>
                                    </div>
                                  <?php
                                if($usuario_auxiliar == $usuario_logeado){
                                  ?>
                             
                                    <form action="C_EliminarComentario.php" method="POST" id="form"> 
                                        <button class="Modificar-usuarioRespuesta" name = "bntElim" id = "btnElim" href="#">Eliminar Comentario</button>
                                        <input type="hidden" name="id" id="id" value = <?php echo $_POST['id']?>>
                                        </form>  

                                <?php
                                }
                                ?>
                                    <div class="grupoRespuesta modificarRespuesta">
                           
                                    </div>
                                </div>

                            </div>
                           <br><br>
                        
                           