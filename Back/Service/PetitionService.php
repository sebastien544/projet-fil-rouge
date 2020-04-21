<?php 

include_once (__DIR__ . "/../Model/SignaturePetition.php");
include_once (__DIR__ . "/../Model/Utilisateur.php");
include_once (__DIR__. "/../DAO/PetitionDataAccess.php");
include_once (__DIR__. "/../DAO/UtilisateurDataAccess.php");  



class PetitionService  {
    private $dao;
    private $userDAO;
    public function __construct(){
        $this->dao = new PetitionDataAccess();
        $this->userDAO = new UtilisateurDataAccess();
    }

    function ajoutPetition($idPet, $mail){
        $data = $this->userDAO->rechercheUtilisateur($mail);
        $pet = new SignaturePetition();
        $pet->setUser($data['id_utilisateur'])
            ->setDate(date("Y-m-d H:i:s"));
        $this->dao->ajoutPetition($pet, $idPet);
    }

    function afficherPetitions($mail){
        return $this->dao->afficherPetitions($mail);
    }
}