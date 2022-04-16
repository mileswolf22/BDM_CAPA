
$(document).ready(function() {


    $('#Color').on('change', function() {

        var iconsSeccionSolo=document.getElementById('iconsSeccionSolo');
        var Color=document.getElementById('Color').value;

        iconsSeccionSolo.style.backgroundColor=Color;
        
       
    });


});


function IconsButton(x){

    //var IconsButton = x.textContent;
    var IconsButton = x.id;
    var imgIconsSolo = document.getElementById('imgIconSeccion');
    var inputIconsSolo = document.getElementById('Icon');
    
    switch (IconsButton) {
        case "iconsSeccion_0":
            imgIconsSolo.src="recursos/imagenes/iconos/cake-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/cake-solid-24.png";
            break;
        case "iconsSeccion_1":
            imgIconsSolo.src="recursos/imagenes/iconos/baguette-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/baguette-solid-24.png";
            break; 
        case "iconsSeccion_2":
            imgIconsSolo.src="recursos/imagenes/iconos/bus-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/bus-regular-24.png";            
            break;
        case "iconsSeccion_3":
            imgIconsSolo.src="recursos/imagenes/iconos/camera-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/camera-solid-24.png";              
            break; 
        case "iconsSeccion_4":
            imgIconsSolo.src="recursos/imagenes/iconos/car-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/car-solid-24.png";              
            break; 
        case "iconsSeccion_5":
            imgIconsSolo.src="recursos/imagenes/iconos/cat-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/cat-solid-24.png";              
            break;
        case "iconsSeccion_6":
            imgIconsSolo.src="recursos/imagenes/iconos/cloud-lightning-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/cloud-lightning-regular-24.png";                
            break; 
        case "iconsSeccion_7":
            imgIconsSolo.src="recursos/imagenes/iconos/dna-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/dna-regular-24.png";                
            break;
        case "iconsSeccion_8":
            imgIconsSolo.src="recursos/imagenes/iconos/dollar-circle-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/dollar-circle-solid-24.png";                
            break;
        case "iconsSeccion_9":
            imgIconsSolo.src="recursos/imagenes/iconos/building-house-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/building-house-regular-24.png";                
            break;
        case "iconsSeccion_10":
            imgIconsSolo.src="recursos/imagenes/iconos/face-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/face-solid-24.png";                
            break;
        case "iconsSeccion_11":
            imgIconsSolo.src="recursos/imagenes/iconos/football-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/football-regular-24.png";            
            break;
        case "iconsSeccion_12":
            imgIconsSolo.src="recursos/imagenes/iconos/intersect-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/intersect-regular-24.png";            
            break;
        case "iconsSeccion_13":
            imgIconsSolo.src="recursos/imagenes/iconos/invader-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/invader-solid-24.png";            
            break;
        case "iconsSeccion_14":
            imgIconsSolo.src="recursos/imagenes/iconos/money-withdraw-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/money-withdraw-regular-24.png";
            break;
        case "iconsSeccion_15":
            imgIconsSolo.src="recursos/imagenes/iconos/movie-play-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/movie-play-solid-24.png";
            break;
        case "iconsSeccion_16":
            imgIconsSolo.src="recursos/imagenes/iconos/music-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/music-solid-24.png";
            break;
        case "iconsSeccion_17":
            imgIconsSolo.src="recursos/imagenes/iconos/palette-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/palette-regular-24.png";
            break;
        case "iconsSeccion_18":
            imgIconsSolo.src="recursos/imagenes/iconos/phone-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/phone-solid-24.png";
            break;
        case "iconsSeccion_19":
            imgIconsSolo.src="recursos/imagenes/iconos/pizza-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/pizza-solid-24.png";
            break;
        case "iconsSeccion_20":
            imgIconsSolo.src="recursos/imagenes/iconos/planet-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/planet-solid-24.png";
            break;
        case "iconsSeccion_21":
            imgIconsSolo.src="recursos/imagenes/iconos/restaurant-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/restaurant-regular-24.png";
            break;
        case "iconsSeccion_22":
            imgIconsSolo.src="recursos/imagenes/iconos/search-alt-2-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/search-alt-2-regular-24.png";
            break;
        case "iconsSeccion_23":
            imgIconsSolo.src="recursos/imagenes/iconos/skull-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/skull-solid-24.png";
            break;
        case "iconsSeccion_24":
            imgIconsSolo.src="recursos/imagenes/iconos/store-alt-regular-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/store-alt-regular-24.png";
            break;
        case "iconsSeccion_25":
            imgIconsSolo.src="recursos/imagenes/iconos/sun-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/sun-solid-24.png";
            break;
        case "iconsSeccion_26":
            imgIconsSolo.src="recursos/imagenes/iconos/time-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/time-solid-24.png";
            break;
        case "iconsSeccion_27":
            imgIconsSolo.src="recursos/imagenes/iconos/virus-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/virus-solid-24.png";
            break;
        case "iconsSeccion_28":
            imgIconsSolo.src="recursos/imagenes/iconos/x-circle-solid-24.png";
            inputIconsSolo.value="recursos/imagenes/iconos/x-circle-solid-24.png";
            break;

        default:
            break;
    }

    
}