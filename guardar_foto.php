<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe la imagen en formato base64 desde el cliente
    $foto_base64 = $_POST['foto'];

    // Decodifica la imagen desde base64
    $foto = base64_decode($foto_base64);

    // Guarda la imagen en el servidor (puedes ajustar la ruta y el nombre del archivo según tus necesidades)
    $ruta_guardar = 'fotos/';
    $nombre_archivo = uniqid() . '.png';
    file_put_contents($ruta_guardar . $nombre_archivo, $foto);

    echo 'Foto guardada con éxito en ' . $ruta_guardar . $nombre_archivo;
} else {
    echo 'Método no permitido';
}
?>