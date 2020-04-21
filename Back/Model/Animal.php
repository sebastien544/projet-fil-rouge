<?php
include_once ('../DAO/AnimalDataAccess.php');

class Animal
{
    private $id;
    private $typeAnimal;


    /**
     * Get the value of typeAnimal
     */ 
    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }

    /**
     * Set the value of typeAnimal
     *
     * @return  self
     */ 
    public function setTypeAnimal($typeAnimal)
    {
        $this->typeAnimal = $typeAnimal;

        return $this;
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
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    public function findAnimal($typeAnimal)
    {
        $animalDAO = new AnimalDataAccess();
        $data = $animalDAO->findanimalBY($typeAnimal);
        $this->setTypeAnimal($data['type_animal'])
            ->setId($data['id_animal']);
    }
}