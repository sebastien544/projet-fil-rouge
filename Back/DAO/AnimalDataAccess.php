<?php
include_once ('ConnexionDDB.php');

class AnimalDataAccess extends ConnexionDDB
{
    /**
     * Recherche un animal 
     *
     * @param string $typeAnimal
     * @return array
     */
    public function findAnimalBy(string $typeAnimal) :  array
    {
        $db = $this->connectDatabase();
        $rs = $db->query('SELECT * FROM animal WHERE type_animal = "'.$typeAnimal.'"');
        $data = mysqli_fetch_assoc($rs);
        $db->close();
        $rs->free();
        return $data;
    }
}