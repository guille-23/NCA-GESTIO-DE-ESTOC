<?php 

require_once "config/database.php";  
    class producte{   
        public $Nom_del_producte;
        public $Cuantitat;
        public $Aula;
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
        
        /**
         * Get the value of Aula
         */ 
        public function getAula()
        {
                return $this->Aula;
        }

        /**
         * Set the value of Aula
         *
         * @return  self
         */ 
        public function setAula($Aula)
        {
                $this->Aula = $Aula;

                return $this;
        }
      
    
        public function mostrar(){
            $connexio = database::connectar();
            $sql = "SELECT * FROM productes";
            $result = mysqli_query($connexio, $sql);
            return $result;
        }
        public function insertar(){
            $connexio = database::connectar();
            $sql = "INSERT INTO productes (Nom_del_producte, Cuantitat, Aula, Armari, Data_registre) VALUES ('$this->Nom_del_producte', '$this->Cuantitat', '$this->Aula', '$this->Armari', '$this->Data_registre')";
            $result = mysqli_query($connexio, $sql);
            return $result;
            
        }
        /*public function modificar(){
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