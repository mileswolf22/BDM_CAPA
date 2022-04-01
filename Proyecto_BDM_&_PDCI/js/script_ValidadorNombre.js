$(document).ready(function() {


    $('#nombre').on('change', function() {

        var nombre=document.getElementById('nombre').value;

    
        if(nombre != ""){

        var texto=$('#nombre').val();
        var reg=/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/g; 

        if (texto.match(reg)) { 
     
           // alert("Me activaste");

        } else
        {
            alert("Nombre no válido: Recuerda agregar tu nombre con apellidos");
            document.getElementById('nombre').value =""
        }
    
    }
       
    });


});