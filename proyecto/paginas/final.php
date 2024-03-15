<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario Kart</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            position: relative;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../IMG/fondo.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1; /* Para colocar la imagen detrás del contenido */
        }
        .video-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1; /* Para colocar el video sobre la imagen */
        }
        video {
            width: 100%; /* Ajusta el ancho del video según sea necesario */
            max-width: 800px; /* Ancho máximo del video */
            height: auto; /* Mantener la relación de aspecto */
            display: block;
            margin: 0 auto;
        }
        #boton {
            position: absolute;
            margin-left: 80.5%;
            margin-top: 27.5%;
            width: 50px; /* Ancho y alto iguales para hacer un botón redondo */
            height: 50px;
            background-image: url('../IMG/icono.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
            border: none;
            border-radius: 50%; /* Hace que el botón sea redondo */
            cursor: pointer;
        }
        #boton:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<div class="background"></div>
<div class="video-container">
    <video id="miVideo" autoplay >
        <source src="../IMG/video.mp4" type="video/mp4">
    </video>
</div>


<a href="../index.html">
  <button id="boton"></button>
</a> 

</body>
</html>