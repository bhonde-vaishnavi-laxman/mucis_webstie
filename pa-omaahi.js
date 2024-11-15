let progress = document .getElementById("progress");
let song = document .getElementById("song");
let icon = document .getElementById("icon");

song.onloadedmetadata = function (){
    progress.max = song.duration;
    progress.value = song.currentTime;

}
function playPause() {
    if(icon.classList.contains("fa-circle-pause")){
        song.pause();
        icon.classList.remove("fa-circle-pause");
        icon.classList.add("fa-circle-play");

    }
    else{
        song.play();
        icon.classList.add("fa-circle-pause");
        icon.classList.remove("fa-circle-play");
    }
}


if(song.play()){
    setInterval(()=>{
        progress.value = song.currentTime;
    },500);
}
progress.onchange = function(){
    song.play();
    song.currentTime = progress.value;
    icon.classList.add("fa-circle-pause");
    icon.classList.remove("fa-circle-play");


}
function back(){
    window.history.back()
 }
 function forward(){
    window.history.forward()
 }
