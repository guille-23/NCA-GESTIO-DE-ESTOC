<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.." />
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

        .container {
            max-width: 400px; /* Ancho máximo del contenedor */
            margin: 50px auto; /* Centrar en el medio de la página */
            border: 2px solid #000; /* Borde negro */
            border-radius: 10px; /* Esquinas redondeadas */
            padding: 20px; /* Espaciado interno */
        }

        .titulo {
            text-align: center; /* Centrar el texto */
            font-size: 24px; /* Tamaño del texto */
            margin-bottom: 20px; /* Espaciado inferior */
        }

        .form-control {
            border: 2px solid #000 !important; /* Bordes negros para los campos de texto */
        }
    </style>
</head>
<body>


<div class="container">
        <div class="titulo">Insertar Producto</div>
        <form class="form-control" action="index.php?controller=producte&action=crear" method="post">
            <!-- ... (tus campos de entrada actuales) ... -->
            
            <!-- Nuevo botón para tomar la foto -->
            <button type="button" class="btn btn-primary" id="tomarFoto">Tomar Foto</button>

            <!-- ... (tus campos de entrada actuales) ... -->
        </form>
    </div>

    <!-- ... (tu código actual) ... -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Obtener referencia al botón y agregar un evento de clic
            const tomarFotoBtn = document.getElementById("tomarFoto");
            tomarFotoBtn.addEventListener("click", function () {
                // Obtener el acceso a la cámara
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        // Mostrar la vista previa de la cámara en un elemento de video
                        const video = document.createElement("video");
                        video.srcObject = stream;
                        video.play();

                        // Esperar a que el usuario haga clic en el botón para capturar la foto
                        tomarFotoBtn.addEventListener("click", function () {
                            // Crear un lienzo (canvas) y dibujar la imagen de la cámara en él
                            const canvas = document.createElement("canvas");
                            canvas.width = video.videoWidth;
                            canvas.height = video.videoHeight;
                            const context = canvas.getContext("2d");
                            context.drawImage(video, 0, 0, canvas.width, canvas.height);

                            // Convertir el lienzo a una URL de datos (data URL) y asignarla a un campo oculto
                            const dataURL = canvas.toDataURL("image/png");
                            const inputFoto = document.createElement("input");
                            inputFoto.type = "hidden";
                            inputFoto.name = "foto"; // Nombre del campo en el formulario
                            inputFoto.value = dataURL;
                            document.forms[0].appendChild(inputFoto);

                            // Detener la transmisión de la cámara y quitar el elemento de video
                            stream.getVideoTracks()[0].stop();
                            video.remove();
                        });
                    })
                    .catch(function (error) {
                        console.error("Error al acceder a la cámara:", error);
                    });
            });
        });
    </script>

    <!-- ... (tu código actual) ... -->



    <div class="container">
        <div class="titulo">Insertar Poducte</div>
        <form class="form-control" action="index.php?controller=producte&action=crear" method="post">

            <label for="Nom_del_producte">Nom_del_producte</label>
            <input class="form-control" type="text" name="Nom_del_producte" id="Nom_del_producte" required>

            <label for="Cuantitat">Cuantitat</label>
            <input class="form-control" type="int" name="Cuantitat" id="Cuantitat" required>

            <label for="Aula">Aula</label>
            <input class="form-control" type="text" name="Aula" id="Aula" required>

            <label for="Armari">Armari</label>
            <input class="form-control" type="text" name="Armari" id="Armari" required>

            <label for="Data_registre">Data_registre</label>
            <input class="form-control" type="date" name="Data_registre" id="Data_registre" required>

            <!-- Cambiado el color del botón a azul -->
            <br><input class="btn btn-primary" type="submit" value="Insertar">
        </form>
    </div>
    <!--content end-->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>