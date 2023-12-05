<?php
class database {
    public static function connectar() {
        $conexion = new mysqli('localhost', 'root', '', 'productes');
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>