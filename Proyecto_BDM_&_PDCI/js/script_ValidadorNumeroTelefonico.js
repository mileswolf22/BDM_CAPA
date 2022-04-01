

$(document).ready(function() {


    $('#numeroContacto').on('change', function() {

        var numeroContacto=document.getElementById('numeroContacto').value;

        if(numeroContacto != ""){

        var texto=$('#numeroContacto').val();
        var reg=/^[0-9]{10}$/g; 
        if (texto.match(reg)) { 
     
           // alert("Me activaste");

        } else
        {
            alert("Número no válido: Debe de ser a 10 digitos.");
            document.getElementById('numeroContacto').value =""
        }
    }
       
    });


});