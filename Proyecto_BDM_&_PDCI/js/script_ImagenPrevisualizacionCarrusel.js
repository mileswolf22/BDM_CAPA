function ImgPrevChange(x){

    const totalFicheros = $(x).get(0).files.length;
    


const archivos = x.files;
if (!archivos || !archivos.length) {


$("#imagenPrevisualizacion").remove();
$("#foto-form").remove();


var el_inputFile=document.createElement('input');
el_inputFile.setAttribute('type', 'file');
el_inputFile.setAttribute('id', 'imagenPrevisualizacion');
el_inputFile.setAttribute('onchange', 'ImgPrevChange(this);');
el_inputFile.type = 'file';
el_inputFile.accept = 'image/*';
el_inputFile.required = 'true';
el_inputFile.multiple = 'true';
document.getElementById('inputFileImg').appendChild(el_inputFile);

var el_labelFile=document.createElement('label');
el_labelFile.setAttribute('class', 'foto-form');
el_labelFile.setAttribute('id', 'foto-form');
el_labelFile.setAttribute('for', 'imagenPrevisualizacion');
var txt_labelFile=document.createTextNode('Imagenes');
el_labelFile.appendChild(txt_labelFile);
document.getElementById('inputFileImg').appendChild(el_labelFile);


var imgPrevA = document.getElementById('carousel-innerImg');
while (imgPrevA.firstChild) {
    imgPrevA.removeChild(imgPrevA.firstChild);
}

var TotalImg = document.getElementById('TotalImg');
TotalImg.value = 1;

var el_div=document.createElement('div');
el_div.setAttribute('class', 'carousel-item active');

var el_img=document.createElement('img');
el_img.setAttribute('class', 'd-block w-100');
el_img.setAttribute('id', 'imgPrev_0');
el_img.src = 'recursos/imagenes/Fotos_Perfil/gatico_01.jpg';
el_div.appendChild(el_img);
document.getElementById('carousel-innerImg').appendChild(el_div);

return;
} else{


;
var imgPrevA = document.getElementById('carousel-innerImg');
while (imgPrevA.firstChild) {
    imgPrevA.removeChild(imgPrevA.firstChild);
}

//$(".imgPrev_").remove();



for(i = 0; i < totalFicheros; i++){ 

var TotalImg = document.getElementById('TotalImg');
TotalImg.value = i+1;

const primerArchivo = archivos[i];
const objectURL = URL.createObjectURL(primerArchivo);

var el_div=document.createElement('div');
if ( i == 0){
el_div.setAttribute('class', 'carousel-item active');
} else {
el_div.setAttribute('class', 'carousel-item');
}

var el_img=document.createElement('img');
el_img.setAttribute('class', 'd-block w-100');
el_img.setAttribute('id', 'imgPrev_'+i);
el_img.src = objectURL;

el_div.appendChild(el_img);
document.getElementById('carousel-innerImg').appendChild(el_div);

}

}



   
}


