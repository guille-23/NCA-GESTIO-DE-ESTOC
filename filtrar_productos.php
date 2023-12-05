<?php

require_once "config/database.php";

if (isset($_GET['aula']) || isset($_GET['armari'])) {
    $connexio = database::connectar();

    $aula = isset($_GET['aula']) ? mysqli_real_escape_string($connexio, $_GET['aula']) : '';
    $armari = isset($_GET['armari']) ? mysqli_real_escape_string($connexio, $_GET['armari']) : '';

    $sql = "SELECT * FROM productes WHERE Aula LIKE '%$aula%' AND Armari LIKE '%$armari%'";
    $result = mysqli_query($connexio, $sql);

    $productos = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $productos[] = $row;
    }

    echo json_encode($productos);
} else {
    echo json_encode(array('error' => 'Parámetros de filtro no proporcionados.'));
}
?>