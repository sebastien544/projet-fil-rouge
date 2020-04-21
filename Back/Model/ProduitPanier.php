<?php
include_once ('Utilisateur.php');

    class ProduitPanier
    {
        private $user;
        private $idProduit;
        private $quantite;

        public function __construct()
        {
            $this->user = new Utilisateur();
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
        public function setUser(Utilisateur $user)
        {       
                $this->user = $user;

                return $this;
        }

        /**
         * Get the value of quantite
         */ 
        public function getQuantite()
        {
                return $this->quantite;
        }

        /**
         * Set the value of quantite
         *
         * @return  self
         */ 
        public function setQuantite(int $quantite)
        {
                $this->quantite = $quantite;

                return $this;
        }

        /**
         * Get the value of idProduit
         */ 
        public function getIdProduit()
        {
                return $this->idProduit;
        }

        /**
         * Set the value of idProduit
         *
         * @return  self
         */ 
        public function setIdProduit($idProduit)
        {
                $this->idProduit = $idProduit;

                return $this;
        }
    }