<?php 

require_once "config/database.php";  
    class producte{   
        public $Nom_del_producte;
        public $Cuantitat;
        public $Armari;
        public $Data_registre;

        /**
         * Get the value of Nom_del_producte
         */ 
        public function getNom_del_producte()
        {
                return $this->Nom_del_producte;
        }

        /**
         * Set the value of Nom_del_producte
         *
         * @return  self
         */ 
        public function setNom_del_producte($Nom_del_producte)
        {
                $this->Nom_del_producte = $Nom_del_producte;

                return $this;
        }

        /**
         * Get the value of Cuantitat
         */ 
        public function getCuantitat()
        {
                return $this->Cuantitat;
        }

        /**
         * Set the value of Cuantitat
         *
         * @return  self
         */ 
        public function setCuantitat($Cuantitat)
        {
                $this->Cuantitat = $Cuantitat;

                return $this;
        }

        /**
         * Get the value of Armari
         */ 
        public function getArmari()
        {
                return $this->Armari;
        }

        /**
         * Set the value of Armari
         *
         * @return  self
         */ 
        public function setArmari($Armari)
        {
                $this->Armari = $Armari;

                return $this;
        }

        /**
         * Get the value of Data_registre
         */ 
        public function getData_registre()
        {
                return $this->Data_registre;
        }

        /**
         * Set the value of Data_registre
         *
         * @return  self
         */ 
        public function setData_registre($Data_registre)
        {
                $this->Data_registre = $Data_registre;

                return $this;
        }
      
    
        public function mostrar(){
            $connexio = database::connectar();
            $sql = "SELECT * FROM productes";
            $result = mysqli_query($connexio, $sql);
            return $result;
        }
        /*public function insertar(){
            $connexio = database::connectar();
            $sql = "INSERT INTO usuaris (nom, cognom, email, password, data) VALUES ('$this->nom', '$this->cognom', '$this->correu', '$this->contrasenya', '$this->data')";
            $result = mysqli_query($connexio, $sql);
            return $result;
            
        }
        public function modificar(){
            $connexio = database::connectar();
            $sql = "UPDATE usuaris SET nom = '$this->nom', cognom = '$this->cognom', email = '$this->correu', password = '$this->contrasenya', data = '$this->data' WHERE id = '$this->id'";
            $result = mysqli_query($connexio, $sql);
            return $result;
        }
        public function eliminar(){
            $connexio = database::connectar();
            $sql = "DELETE FROM usuaris WHERE id = {$this->id};";
            $result = mysqli_query($connexio, $sql);
            return $result;
        }
        public function mostrarUsuari(){
            $connexio = database::connectar();
            $sql = "SELECT * FROM usuaris WHERE id = {$this->id};";
            $result = mysqli_query($connexio, $sql);
            return $result->fetch_assoc();
        }*/

        
    }
    ?>