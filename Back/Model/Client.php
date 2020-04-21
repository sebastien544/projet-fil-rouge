<?php 
include_once ("Utilisateur.php");
include_once ("Adresse.php");

    class Client extends Utilisateur {
        
        private $tel;
        private $date;
        private $adresse;

        public function __construct(){
            $this->adresse = new Adresse();
        }

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse(Adresse $adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }
    }