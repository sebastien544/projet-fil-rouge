<?php 
include_once (__DIR__ . "/../Model/Utilisateur.php");
include_once (__DIR__. "/../DAO/UtilisateurDataAccess.php"); 


class UtilisateurService {
    private $dao;
    public function __construct(){
        $this->dao = new UtilisateurDataAccess();
    }
    function rechercheUser($mail){
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

    function ajout_don($tab, $mail){
        $this->dao->ajout_don($tab, $mail);
    }

    function afficherDon($mail){
        return $this->dao->afficherDon($mail);
    }

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