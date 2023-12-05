<?php
// Verifica si se ha recibido un dato en el cuerpo de la solicitud
if(isset($_POST['data'])) {
    // Decodifica la imagen desde base64
    $data = $_POST['data'];
    $data = str_replace('data:image/png;base64,', '', $data);
    $data = str_replace(' ', '+', $data);
    $imageData = base64_decode($data);

    // Guarda la imagen en el servidor (ajusta la ruta y el nombre del archivo según tus necesidades)
    $ruta_guardar = 'image/';
    $nombre_archivo = uniqid() . '.png';
    file_put_contents($ruta_guardar . $nombre_archivo, $imageData);

    // Devuelve una respuesta en formato JSON indicando la ruta donde se guardó la imagen
    echo json_encode(['status' => 'success', 'message' => 'Imagen guardada con éxito', 'file_path' => $ruta_guardar . $nombre_archivo]);
} else {
    // Si no se recibió ninguna imagen, devuelve un mensaje de error
    echo json_encode(['status' => 'error', 'message' => 'No se recibió ninguna imagen']);
}
?>