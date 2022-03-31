

function funcioniconLike(x){
   
    const archivos = x.classList;
    const archivos01 ="imagen-iconoLike off";

    if (archivos == archivos01){
    x.src="recursos/imagenes/iconos/star-solid-48.png"
    x.classList="imagen-iconoLike on";
    } else{
        x.src="recursos/imagenes/iconos/star-regular-48.png"
        x.classList="imagen-iconoLike off";
    }


};