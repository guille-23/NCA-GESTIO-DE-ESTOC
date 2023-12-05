<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturar y Guardar Foto</title>
</head>
<body>
    <video id="video" width="640" height="480" autoplay></video>
    <button id="captureButton">Capturar Foto</button>
    <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>

    <script>
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                var video = document.getElementById('video');
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.log('Error al acceder a la cámara: ', error);
            });

        var captureButton = document.getElementById('captureButton');
        captureButton.addEventListener('click', function () {
            var video = document.getElementById('video');
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Convertir la imagen a base64
            var imageData = canvas.toDataURL('image/png');

            // Muestra la imagen capturada en un nuevo ventana o pestaña
            window.open(imageData, '_blank');
        });
    </script>
</body>
</html>