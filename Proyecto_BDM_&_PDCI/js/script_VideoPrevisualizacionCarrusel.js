

function VideoPrevChange(x){

    const totalFicheros = $(x).get(0).files.length;
    
  
  
  const archivos = x.files;
  if (!archivos || !archivos.length) {
  
  
  $("#videoPrevisualizacion").remove();
  $("#video-form").remove();
  
  
  var el_inputFile=document.createElement('input');
  el_inputFile.setAttribute('type', 'file');
  el_inputFile.setAttribute('id', 'videoPrevisualizacion');
  el_inputFile.setAttribute('onchange', 'VideoPrevChange(this);');
  el_inputFile.type = 'file';
  el_inputFile.accept = 'video/mp4';
  el_inputFile.required = 'true';
  el_inputFile.multiple = 'true';
  document.getElementById('inputFileVideo').appendChild(el_inputFile);
  
  var el_labelFile=document.createElement('label');
  el_labelFile.setAttribute('class', 'foto-form');
  el_labelFile.setAttribute('id', 'video-form');
  el_labelFile.setAttribute('for', 'videoPrevisualizacion');
  var txt_labelFile=document.createTextNode('Video');
  el_labelFile.appendChild(txt_labelFile);
  document.getElementById('inputFileVideo').appendChild(el_labelFile);
  
  
  var videoPrevA = document.getElementById('carousel-innerVideo');
  while (videoPrevA.firstChild) {
    videoPrevA.removeChild(videoPrevA.firstChild);
  }

  var totalVideos = document.getElementById('TotalVideos');
  totalVideos.value = 1;
  
  var el_div=document.createElement('div');
  el_div.setAttribute('class', 'carousel-item active');
  
  var el_source= document.createElement('source');
  el_source.type = "video/mp4";
  el_source.src = "./recursos/videos/Jinjo_Wii_BanjoKazooie.mp4";
  
  var el_video=document.createElement('video');
  el_video.setAttribute('class', 'videoPlayer');
  el_video.setAttribute('id', 'videoPlayer_0');
  el_video.setAttribute('height', '340');
  el_video.controls = true;
  
  el_video.appendChild(el_source);
  el_div.appendChild(el_video);
  document.getElementById('carousel-innerVideo').appendChild(el_div);
  
  return;
  } else{
  
  
  ;
  var videoPrevA = document.getElementById('carousel-innerVideo');
  while (videoPrevA.firstChild) {
    videoPrevA.removeChild(videoPrevA.firstChild);
  }
  
  
  for(i = 0; i < totalFicheros; i++){ 

  var totalVideos = document.getElementById('TotalVideos');
  totalVideos.value = i+1;
  
  const primerArchivo = archivos[i];
  const objectURL = URL.createObjectURL(primerArchivo);
  
  var el_div=document.createElement('div');
  if ( i == 0){
  el_div.setAttribute('class', 'carousel-item active');
  } else {
  el_div.setAttribute('class', 'carousel-item');
  }
  
  
  var el_source= document.createElement('source');
  el_source.type = "video/mp4";
  el_source.src = objectURL;
  
  
  var el_video=document.createElement('video');
  el_video.setAttribute('class', 'videoPlayer');
  el_video.setAttribute('id', 'videoPlayer_'+i);
  el_video.setAttribute('height', '340');
  el_video.controls = true;
  
  el_video.appendChild(el_source);
  el_div.appendChild(el_video);
  document.getElementById('carousel-innerVideo').appendChild(el_div);
  
  }
  
  }
  
  
  
   
  }