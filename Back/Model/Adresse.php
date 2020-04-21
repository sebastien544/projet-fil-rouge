<?php

    class Adresse {

        private $adresse;
        private $codePostal;
        private $ville;
        private $region;
        private $pays;
       

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
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of codePostal
         */ 
        public function getCodePostal()
        {
                return $this->codePostal;
        }

        /**
         * Set the value of codePostal
         *
         * @return  self
         */ 
        public function setCodePostal($codePostal)
        {
                $this->codePostal = $codePostal;

                return $this;
        }

        /**
         * Get the value of ville
         */ 
        public function getVille()
        {
                return $this->ville;
        }

        /**
         * Set the value of ville
         *
         * @return  self
         */ 
        public function setVille($ville)
        {
                $this->ville = $ville;

                return $this;
        }

        /**
         * Get the value of region
         */ 
        public function getRegion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setRegion($region)
        {
                $this->region = $region;

                return $this;
        }

        /**
         * Get the value of pays
         */ 
        public function getPays()
        {
                return $this->pays;
        }

        /**
         * Set the value of pays
         *
         * @return  self
         */ 
        public function setPays($pays)
        {
                $this->pays = $pays;

                return $this;
        }
    }