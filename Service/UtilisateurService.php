<?php 

include_once (__DIR__ . "/../Model/Donation.php");
include_once (__DIR__ . "/../Model/Utilisateur.php");
include_once (__DIR__. "/../DAO/UtilisateurDataAccess.php"); 



class UtilisateurService {
    private $dao;

    public function __construct(){
        $this->dao = new UtilisateurDataAccess();
    }

    
    public function rechercheUser($mail){
        $data = $this->dao->rechercheUtilisateur($mail);
        return $data;
    }


    public function checkUserNameAndPassword($mail, $password /*, $role*/, $tab){
        if ($tab["mail"] == $mail && password_verify($tab["password"], $password)){
            
           /* $_SESSION["role"] = $role;*/
            return true;
        } 
        return false;
    }


    public function newAccount($tab){
        
        $data = $this->dao->rechercheUtilisateur($tab["mail"]);
        if($data){
            return false;
        } else {
            // inscrire
            $this->dao->inscription($tab["mail"], $tab["password"], $tab["firstName"], $tab["lastName"]);
            return true;
        }
        
    }

    public function findAnimalBY($tab){
        $this->dao->findAnimalBY($tab);
    }

   
    function afficherpet($mail){
        return $this->dao->afficherPet($mail);
    }

    function afficherInfo($mail){
        return $this->dao->afficherPet($mail);
    }


    function selectPetSigne ($var,$mail){
        return $this->dao->selectPetSigne($var,$mail);

    }


   
    

}
?>