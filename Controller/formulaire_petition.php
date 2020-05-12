<?php 

session_start();

include_once (__DIR__."/../Service/UtilisateurService.php");

if(isset($_POST["validation_petition"])){

    $petition = $_POST['idPetition'];

    $userServ = new UtilisateurService;

    $userServ->ajout_petition($petition, $_SESSION['mail']);

    
}
if(isset($_POST['action']) && $_POST['searchPet']){
    $userServ = new UtilisateurService;

    $petition = $_POST['id'];

    $data=$userServ->selectPetSigne($petition, $_SESSION['mail']);

    echo json_encode($data);

}