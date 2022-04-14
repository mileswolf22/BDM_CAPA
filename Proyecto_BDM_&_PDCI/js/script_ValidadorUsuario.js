

$(document).ready(function() {


    $('#usuario').on('change', function() {

        var usuario=document.getElementById('usuario').value;

        if(usuario != ""){

        var texto=$('#usuario').val();
        var reg=/^(?=.*[a-zA-Z0-9]).{9,15}$/g; 
        if (texto.match(reg)) { 
     
            alert("Me activaste");
            $.ajax({
                type : 'POST',
                url  : 'C_ValidarUsuario.php',
                data : $(this).serialize(),
                error:  alert("Marco algun Error"),
                success : function(data){
                    if(data == "UsuarioDisponible"){
                                        
                        alert("Usuario Disponible");

                    } else if (data == "UsuarioNoDisponible") {

                        alert("Usuario No Disponible");
                        document.getElementById('usuario').value ="";
                    }
                }
            });

        } else
        {
            alert("Usuario no válido: El usuario debe de ser de mínimo 9 a máximo 15 carácteres que solo contengan letras y números");
            document.getElementById('usuario').value =""
        }
    }
       
    });


});