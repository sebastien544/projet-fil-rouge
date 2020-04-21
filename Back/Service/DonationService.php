<?php 

include_once (__DIR__ . "/../Model/Donation.php");
include_once (__DIR__ . "/../Model/Utilisateur.php");
include_once (__DIR__. "/../DAO/DonationDataAccess.php");
include_once (__DIR__. "/../DAO/UtilisateurDataAccess.php");  



class DonationService  
{
    private $dao;
    private $userDAO;

    public function __construct()
    {
        $this->dao = new DonationDataAccess();
        $this->userDAO = new UtilisateurDataAccess();
    }

    function ajoutDon(array $tab,string $mail)
    {
        $data = $this->userDAO->rechercheUtilisateur($mail);
        $data2 = $this->userDAO->findAnimalBy($tab);
        $don = new Donation();
        $don->setMontant($tab['amount'])
            ->setUser($data['id_utilisateur'])
            ->setFrequence($tab['frequency'])
            ->setAnimal($data2['id_animal'])
            ->setDate(date("Y-m-d H:i:s"));
        $this->dao->ajoutDon($don);
    }

    function afficherDon(string $mail)
    {
        return $this->dao->afficherDon($mail);
    }
}