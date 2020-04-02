<?php 

session_start();

include_once (__DIR__."/../Service/UtilisateurService.php");

if(isset($_POST["validation_petition"])){

    $petition = $_POST['idPetition'];

    $userServ = new UtilisateurService;

    $userServ->ajout_petition($petition, $_SESSION['mail']);

    
}