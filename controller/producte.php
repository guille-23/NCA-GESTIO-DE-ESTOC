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

    public function actualitzar() {
        $producte = new producte();
        $producte->setNom_del_producte($_GET["mostrarPoducte_id"]);
        $row = $producte->mostrarPoducte();
        require_once "views/producte/actualizar.php";
    }

    public function crear() {
        $producte = new producte();
        $producte->setNom_del_producte($_POST["Nom_del_producte"]);
        $producte->setCuantitat($_POST["Cuantitat"]);
        $producte->setAula($_POST["Aula"]);
        $producte->setArmari($_POST["Armari"]);
        $producte->setData_registre($_POST["Data_registre"]);
        $producte->setFoto($_POST["Foto"]);
        $producte->setArchibat($_POST["Archibat"]);
        $producte->insertar();
        header("Location:index.php?controller=producte&action=mostrartot");
    }
    

    public function editar() {
        $producte = new producte();
        $producte->setNom_del_producte($_POST["Nom_del_producte"]);
        $producte->setCuantitat($_POST["Cuantitat"]);
        $producte->setAula($_POST["Aula"]);
        $producte->setArmari($_POST["Armari"]);
        $producte->setData_registre($_POST["Data_registre"]);
        $producte->setFoto($_POST["Foto"]);
        $producte->setArchibat($_POST["Archibat"]);
        $producte->modificar();
        header("Location:index.php?controller=producte&action=mostrartot");
    }
    public function archivarProducto() {
        $producte = new producte();
        $productes = $producte->mostrar();
        require_once "views/producte/archivarProducto.php";
    }
    
    public function archivar($mostrarPoducte_id) {
        $producte = new producte();
        $result = $producte->archivar($mostrarPoducte_id);
        // Puedes enviar una respuesta al cliente si es necesario
        if ($result) {
            echo "Producto archivado correctamente";
        } else {
            echo "Error al archivar el producto";
        }
    }
    
}
?>