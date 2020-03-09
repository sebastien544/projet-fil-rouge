<?php 
include_once (__DIR__ . "/../model/Utilisateur.php");
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
            session_start();
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
}
?>