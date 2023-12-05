<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora is a best Graphics, software and Web Development company and provides all IT solutions to their client. In india.." />
    <meta name="Keywords" content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
    <meta name="author" content="contain by Wepora team">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Wepora Snippets</title>

    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
        }

        nav.navbar {
            background-color: #007bff; /* Color de fondo azul */
        }

        nav.navbar a.nav-link {
            color: #fff !important; /* Color del texto blanco */
            margin-right: 10px; /* Añadido margen derecho para separar los elementos del menú */
        }

        nav.navbar a.nav-link:hover,
        nav.navbar a.nav-link.active {
            background-color: #0056b3; /* Color de fondo azul oscuro al pasar el ratón o por defecto */
        }
    </style>
</head>

<body>
    <!--content start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=producte&action=mostrartot">Productes</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


    
    <video id="video" width="640" height="480" autoplay></video>
    <button id="captureButton">Capturar Foto</button>
    <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>

    <script>
        // Obtener acceso a la cámara
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                var video = document.getElementById('video');
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.log('Error al acceder a la cámara: ', error);
            });

        // Capturar y enviar la foto al servidor PHP
        var captureButton = document.getElementById('captureButton');
        captureButton.addEventListener('click', function () {
            var video = document.getElementById('video');
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Convertir la imagen a base64
            var imageData = canvas.toDataURL('image/png');

            // Enviar la imagen al servidor PHP
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_photo.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log('Foto guardada con éxito.');
                }
            };
            xhr.send('image=' + encodeURIComponent(imageData));
        });
    </script>

  

    <?php

    require_once "autoload.php";

    if (isset($_GET["controller"]) && class_exists($_GET["controller"])) {
        $nomcontroller = $_GET["controller"] . "Controller";
        $controller = new $nomcontroller();

        if (isset($_GET["action"]) && method_exists($controller, $_GET["action"])) {
            $action = $_GET["action"];
            $controller->$action();
        } else {
            echo $_GET["action"] . " no existeix aquest metode";
        }
    } else {

        echo $_GET["controller"] .  " no existeix el controlador";
    }

    ?>

    <!--content end-->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>