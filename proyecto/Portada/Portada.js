var video = document.getElementById('video');
var loadingProgress = document.getElementById('loading-progress');
var percentage = document.getElementById('percentage');
var btnSiguiente = document.getElementById('btn-siguiente');

document.addEventListener("DOMContentLoaded", function() {
    var video = document.getElementById("video");
    video.autoplay = true;
});

video.addEventListener('timeupdate', function() {
    var percent = Math.floor((100 / video.duration) * video.currentTime);
    loadingProgress.style.width = percent + '%';
    percentage.textContent = percent + '%';
});

video.addEventListener('ended', function() {
    btnSiguiente.style.display = 'block';
});

function irSiguiente() {
    window.location.href = 'paginas/pantalla1.php';
}

