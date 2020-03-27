<?php 

session_start();

include_once (__DIR__ . "../Service/UtilisateurService.php");

if(isset($_POST["validation_petition"])){

    $animal = $_POST["animal"];

    $userServ = new UtilisateurService;
    $userServ->sign_petition($animal, $_SESSION['mail']);

    
}