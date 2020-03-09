<?php

class Utilisateur {
    
    private $id_utlisateur;
    private $prenom;
    private $nom;
    private $mail;
    private $password;



    /**
     * Get the value of id_utlisateur
     */ 
    public function getId_utlisateur()
    {
        return $this->id_utlisateur;
    }

    /**
     * Set the value of id_utlisateur
     *
     * @return  self
     */ 
    public function setId_utlisateur($id_utlisateur)
    {
        $this->id_utlisateur = $id_utlisateur;

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
}