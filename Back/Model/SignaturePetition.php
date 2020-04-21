<?php

    class SignaturePetition {

        private $date;
        private $user;
        private $animal;
        

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
         * Get the value of animal
         */ 
        public function getAnimal()
        {
                return $this->animal;
        }

        /**
         * Set the value of animal
         *
         * @return  self
         */ 
        public function setAnimal($animal)
        {
                $this->animal = $animal;

                return $this;
        }
    }
