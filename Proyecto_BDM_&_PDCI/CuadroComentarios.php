<!-- EN ESTA PAGINA SE CREARAN DINAMICAMENTE LOS COMENTAIRO SSEGUN SE VAYAN PONIENDO
EN RELACION A SU NOTICIA ORIGEN, esta sera para el usuario logeado -->
<?php
//primeramente traer los daos de la base de datos a mostrarse en la caja



?>

<!--Habiendose cargado la data del comentario ahora escribe el cuadro -->

<div class="respuesta Contenedor_0">
                              <div class="grupoRespuesta usuario">
                              <input type="hidden" name="num" id="num" >
                                  <h4 class="Editado-Respuesta">No Editado</h4>
                                  <h4 class="FechaHora-Respuesta"></h4>
                                  <br>
                                  <h4 class="FechaHora-Respuesta"> <?php echo $_SESSION['US']?> </h4>
                            
                                  <a class="aimagen-usuario" href="Pagina_Perfil.html">
                                      <img class="imagen-usuario" src="data:image/jpg;base64, <?php echo "".base64_encode($_SESSION['foto']); ?>"></a>
                                      <a class="titulo-usuarioRespuesta" href="Pagina_Perfil.html">0</a>
                                      <hr class="hr-usuarioRespuesta" style="border: 1px solid rgb(73, 64, 140);">
                                    </div>
                                    <div class="grupoRespuesta p">
                                        <p class="respuesta-usuarioRespuesta"> COMMENT </p>
                                    </div>
                                    <div class="grupoRespuesta modificarRespuesta">
                                  
                                       
                                    </div>
                                </div>
                            </div>
                          
                          <div class="grupo">
                          <input class="usuario" type="text" name="" id="usuario" title="panoso">
                          <input class="IdEscondido" type="text" name="" id="IdEscondido">
                          </div>

                         
                          <label class="datos-form">Comentario</label>
                          <textarea id="comment" class="form-control" required ></textarea></label>
                          </div>

                          <br><br>
                        <form action="C_CrearComentario.php" method="POST" id="form">
                        <button type="submit" class="buttonComentario" onclick="commentBox();">Enviar</button>
                        </form>
                        <br>
                      
                  </div>

                  <script src="js/script_Comentarios.js"></script>
            
                            <br><br>