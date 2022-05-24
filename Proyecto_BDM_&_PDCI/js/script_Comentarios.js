
function commentBox(){
	var usuario=document.getElementById('usuario').value;
	var comment=document.getElementById('comment').value;
 
	if(comment ==""){
		alert("Porfavor introduce la informacion requerida!");
	}else{
		contador = contador + 1;

		var div_respuesta=document.createElement('div');
		var div_gruporespuestaUsuario=document.createElement('div');
		div_gruporespuestaUsuario.setAttribute('class', 'grupoRespuesta usuario');

		var div_gruporespuestaP=document.createElement('div'); 
		div_gruporespuestaP.setAttribute('class', 'grupoRespuesta p');

		var div_grupoModificarRespuesta=document.createElement('div');
		div_grupoModificarRespuesta.setAttribute('class', 'grupoRespuesta modificarRespuesta');




       /* /////////////////////////////////////////////////////// */


		var el_usuario=document.createElement('a');
		el_usuario.setAttribute('class', 'titulo-usuarioRespuesta');
		el_usuario.setAttribute('href', 'Pagina_Perfil.html');
		var el_aimagenUsuario=document.createElement('a');
		el_aimagenUsuario.setAttribute('class', 'aimagen-usuario');
		el_aimagenUsuario.setAttribute('href', 'Pagina_Perfil.html');
		var el_imagenUsuario=document.createElement('img');
		el_imagenUsuario.setAttribute('class', 'imagen-usuario');
		el_imagenUsuario.src="recursos/imagenes/Fotos_Perfil/gatico_01.jpg";

		var el_respuesta=document.createElement('p');
		el_respuesta.setAttribute('class', 'respuesta-usuarioRespuesta');
		var el_line=document.createElement('hr');
		el_line.setAttribute('class', 'hr-usuarioRespuesta');

		var el_FechaHora=document.createElement('h4');
		el_FechaHora.setAttribute('class', 'FechaHora-Respuesta');
		var el_Editado=document.createElement('h4');
		el_Editado.setAttribute('class', 'Editado-Respuesta');

		var el_modrespuesta=document.createElement('a');
		el_modrespuesta.setAttribute('class', 'Modificar-usuarioRespuesta');
		el_modrespuesta.setAttribute('href', '#');


		/* /////////////////////////////////////////////////////// */

		var txt_usuario=document.createTextNode(usuario);
		var txt_respuesta=document.createTextNode(comment);
		var txt_modificarrespuesta=document.createTextNode('Eliminar Comentario');
		var txt_FechaHora=document.createTextNode(formatoFecha());
		var txt_Editado=document.createTextNode('No Editado');


		el_usuario.appendChild(txt_usuario);
		el_respuesta.appendChild(txt_respuesta);
		el_modrespuesta.appendChild(txt_modificarrespuesta);
		el_FechaHora.appendChild(txt_FechaHora);
		el_Editado.appendChild(txt_Editado);
		el_line.style.border='1px solid #49408C';

		/* /////////////////////////////////////////////////////// */

		el_aimagenUsuario.appendChild(el_imagenUsuario);
		div_gruporespuestaUsuario.appendChild(el_Editado);
		div_gruporespuestaUsuario.appendChild(el_Editado);
		div_gruporespuestaUsuario.appendChild(el_FechaHora);
		div_gruporespuestaUsuario.appendChild(el_usuario);
		div_gruporespuestaUsuario.appendChild(el_line);

		div_gruporespuestaP.appendChild(el_respuesta);

		div_grupoModificarRespuesta.appendChild(el_modrespuesta);


        /* /////////////////////////////////////////////////////// */
 
		div_respuesta.setAttribute('class', 'respuesta Contenedor_'+contador);
		div_respuesta.appendChild(div_gruporespuestaUsuario);
		div_respuesta.appendChild(div_gruporespuestaP);

		div_respuesta.appendChild(div_grupoModificarRespuesta);

		document.getElementById('result').appendChild(div_respuesta);

		
 
		document.getElementById('usuario').value="";
		document.getElementById('comment').value="";
	}
 
}
