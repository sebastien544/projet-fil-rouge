<?php 

include_once (__DIR__ . "/../Model/Donation.php");
include_once (__DIR__. "/../DAO/DonationDataAccess.php"); 



class DonationService  
{
    private $dao;

    public function __construct()
    {
        $this->dao = new DonationDataAccess();
    }

    function ajoutDon(array $tab,string $mail)
    {   
        
        $don = new Donation();
        $don->getUser()->currentUser($mail);
        $don->getAnimal()->findAnimal($tab['animal']);
        $don->setMontant($tab['amount'])
            ->setFrequence($tab['frequency'])
            ->setDate(date("Y-m-d H:i:s"));
        $this->dao->ajoutDon($don);
    }

    function afficherDon(string $mail)
    {
        return $this->dao->afficherDon($mail);
    }
}