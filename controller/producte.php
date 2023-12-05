<?php 
require_once 'model/producte.php';

class producteController {

    public function mostrartot() {
        $producte = new producte();
        $productes = $producte->mostrar();
        require_once "views/producte/mostrar.php";
    }

   /* public function insertar() {
        require_once "views/usuari/insertar.php";
    }

    public function actualitzar() {
        $usuari = new usuari();
        $usuari->setId($_GET["user_id"]);
        $row = $usuari->mostrarUsuari();
        require_once "views/usuari/actualitzar.php";
    }

    public function crear() {
        $usuari = new usuari();
        $usuari->setNom($_POST["nom"]);
        $usuari->setCognom($_POST["cognom"]);
        $usuari->setCorreu($_POST["email"]);
        $usuari->setContrasenya($_POST["password"]);
        $usuari->setData($_POST["data"]);
        $usuari->insertar();
        header("Location:index.php?controller=usuari&action=mostrartot");
    }

    public function editar() {
        $usuari = new usuari();
        $usuari->setId($_POST["id"]);
        $usuari->setNom($_POST["nom"]);
        $usuari->setCognom($_POST["cognom"]);
        $usuari->setCorreu($_POST["email"]);
        $usuari->setContrasenya($_POST["password"]);
        $usuari->setData($_POST["data"]);
        $usuari->modificar();
        header("Location:index.php?controller=usuari&action=mostrartot");
    }

    public function EsborrarUsuari(){
        $id = $_GET["user_id"];
        $usuari = new usuari();
        $usuari->setId($id);
        $usuari->eliminar();
        header("Location: index.php?controller=usuari&action=mostrartot");
    }*/
}
?>