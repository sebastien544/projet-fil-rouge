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
    function checkUserNameAndPassword($mail, $password /*, $role*/, $tab){
        if ($tab["mail"] == $mail && password_verify($tab["password"], $password)){
            
           /* $_SESSION["role"] = $role;*/
            return true;
        } 
        return false;
    }
    function newAccount($tab){
        
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

    // function ajoutDon($tab, $mail){
    //     $data = $this->dao->rechercheUtilisateur($mail);
    //     $data2 = $this->dao->findAnimalBy($tab);
    //     $don = new Donation();
    //     $don->setMontant($tab['amount'])
    //         ->setUser($data['id_utilisateur'])
    //         ->setFrequence($tab['frequency'])
    //         ->setAnimal($data2['id_animal'])
    //         ->setDate(date("Y-m-d H:i:s"));
    //     $this->dao->ajoutDon($don);
    // }

    // function afficherDon($mail){
    //     return $this->dao->afficherDon($mail);
    // }

    function afficherpet($mail){
        return $this->dao->afficherPet($mail);
    }

    function afficherInfo($mail){
        return $this->dao->afficherPet($mail);
    }

    function insertItem($id,$mail){
         $this->dao->insertItem($id,$mail);
    }

    function selectCart($mail){
        return $this->dao->selectCart($mail);
   }

   function removeItem($id, $mail){
    return $this->dao->removeItem($id, $mail);
    }

    function updateQuantity($id,$mail,$quantity){
         $this->dao->updateQuantity($id, $mail, $quantity);
    }


    function ajout_petition ($var,$mail){
        $this->dao->ajout_petition($var,$mail);
    }
    function selectPetSigne ($var,$mail){
        return $this->dao->selectPetSigne($var,$mail);

    }

    function insertAddress($tab,$mail){
        $this->dao->insertAddress($tab,$mail);
    }

    function selectPromo($var){
       return $this->dao->selectPromo($var);
    }
    

}
?>