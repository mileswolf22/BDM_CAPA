

<div class="comentariosRespuestas">
<input type="hidden" name="id" id="id" value = <?php echo$_SESSION['id']?>>

<form class="comentariosRespuestasform" action = "C_ValidarNoticias.php" method = "Post">
          <div class="grupo">
          <label class="datos-form">Comentario Administrador</label>
          <textarea name = "comment" id="comment" class="form-control" required ></textarea></label>

        
          </div>
          <br><br>
<div class="form-group form-check">
            <input type="radio" class="form-check-input" name = "Aceptar" id="radioAceptar" value="1">
            <label class="form-check-label" for="conditions">Aceptar Noticia</label>

</div>

<div class="form-group form-check">
            <input type="radio" class="form-check-input" name = "Rechazar" id="radioRechazar"  value="1">
            <label class="form-check-label" for="conditions">Rechazar Noticia</label>

</div>

<div class="form-group form-check">
            <input type="radio" class="form-check-input" name = "Revisar" id="radioRevisar"  value="1">
            <label class="form-check-label" for="conditions">Poner en Revision</label>

</div>

<div class="form-group form-check">
            <input type="radio" class="form-check-input" name = "Devolver" id="radioDevolver" value="1">
            <label class="form-check-label" for="conditions">Devolver Noticia</label>

</div>
          <br><br>
        <button type="submit" class="buttonComentario" >Enviar</button>

        

    <!--    <a href="Pagina_ModificarNoticia.php" class="buttonNoticiaEsh">Modificar Noticia</a> -->
        <a href="#" class="buttonNoticiaEsh">Eliminar Noticia</a>
      </form>

</div> 

  <br><br>
</div> 