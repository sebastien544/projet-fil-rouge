<?php
include_once ('../DAO/UtilisateurDataAccess.php');

    class Utilisateur {
        
        private $id;
        private $prenom;
        private $nom;
        private $mail;
        private $password;


    
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;

            return $this;
        }
        

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
            return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
            $this->mail = $mail;

            return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
            $this->nom = $nom;

            return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
            $this->password = $password;

            return $this;
        }

        public function currentUser($mail)
        {
            $userDAO = new UtilisateurDataAccess();
            $data = $userDAO->rechercheUtilisateur($mail);
            $this ->setId($data['id_utilisateur'])
                  ->setPrenom($data['prenom'])
                  ->setNom($data['nom'])
                  ->setMail($data['mail']);
        }

 

}

