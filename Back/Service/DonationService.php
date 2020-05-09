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
        $donationDay = null;
        $don = new Donation();
        if(isset ($tab['donationDay']))
        {
            $donationDay = $tab['donationDay'];
        }
        $don->getUser()->currentUser($mail);
        $Animal = $this->dao->findAnimalBy($tab['animal']);
        $don->setMontant($tab['amount'])
            ->setFrequence($tab['frequency'])
            ->setDate(date("Y-m-d H:i:s"))
            ->setIdAnimal($Animal['id_animal'])
            ->setdonationDay($donationDay);
        $this->dao->ajoutDon($don);
    }

    function afficherDon(string $mail)
    {
        return $this->dao->afficherDon($mail);
    }
}