<?php 
require_once 'model/producte.php';

class producteController {

    public function mostrartot() {
        $producte = new producte();
        $productes = $producte->mostrar();
        require_once "views/producte/mostrar.php";
    }

    public function insertar() {
        require_once "views/producte/insertar.php";
    }
/*
    public function actualitzar() {
        $usuari = new usuari();
        $usuari->setId($_GET["user_id"]);
        $row = $usuari->mostrarUsuari();
        require_once "views/usuari/actualitzar.php";
    }
*/
    public function crear() {
        $producte = new producte();
        $producte->setNom_del_producte($_POST["Nom_del_producte"]);
        $producte->setCuantitat($_POST["Cuantitat"]);
        $producte->setAula($_POST["Aula"]);
        $producte->setArmari($_POST["Armari"]);
        $producte->setData_registre($_POST["Data_registre"]);
        $producte->insertar();
        header("Location:index.php?controller=producte&action=mostrartot");
    }
    /*

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