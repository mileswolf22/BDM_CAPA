

function PausaVideo() { 


    var TotalVideos = document.getElementById("TotalVideos").value;

    for(i = 0; i < TotalVideos; i++){ 

    var video = document.getElementById("videoPlayer_"+i);
    //$(".videoPlayer").pause = true;
    video.pause();
    video.currentTime = 0;
    }
 } 