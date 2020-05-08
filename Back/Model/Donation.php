<?php
include_once ('../Model/Utilisateur.php');


class Donation {

        private $date;
        private $montant;
        private $frequence;
        private $user;
        private $idAnimal;

        public function __construct()
        {
                $this->user = new Utilisateur();
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
         * Get the value of montant
         */ 
        public function getMontant()
        {
                return $this->montant;
        }

        /**
         * Set the value of montant
         *
         * @return  self
         */ 
        public function setMontant(int $montant)
        {
                $this->montant = $montant;

                return $this;
        }

        /**
         * Get the value of frequence
         */ 
        public function getFrequence()
        {
                return $this->frequence;
        }

        /**
         * Set the value of frequence
         *
         * @return  self
         */ 
        public function setFrequence($frequence)
        {
                $this->frequence = $frequence;

                return $this;
        }

        /**
         * Get the value of user
         */ 
        public function getUser()
        {
                return $this->user;
        }

        /**
         * Set the value of user
         *
         * @return  self
         */ 
        public function setUser($user)
        {
                $this->user = $user;

                return $this;
        }

       


        /**
         * Get the value of idAnimal
         */ 
        public function getIdAnimal()
        {
                return $this->idAnimal;
        }

        /**
         * Set the value of idAnimal
         *
         * @return  self
         */ 
        public function setIdAnimal($idAnimal)
        {
                $this->idAnimal = $idAnimal;

                return $this;
        }
}