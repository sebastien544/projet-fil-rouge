<?php

    include_once ("../Service/UtilisateurService.php");

    session_start();

        $userServ = new UtilisateurService();

        if(isset($_POST['action']) && $_POST['action'] == "afficherPet"){
            if(isset($_SESSION['mail'])){
                $data = $userServ->afficherpet($_SESSION['mail']);
                echo json_encode($data);
            }else{
                $data = array('status' => false);
                echo json_encode($data);
            }
        } 

        if(isset($_POST['action']) && $_POST['action'] == "validation_petition"){
            if(isset($_SESSION['mail'])){
                $petition = $_POST['idPetition'];
                $userServ = new UtilisateurService;
                $userServ->ajout_petition($petition, $_SESSION['mail']);
                $data = array('status' => true);
                echo json_encode($data);
            }else{
                $data = array('status' => false);
                echo json_encode($data);
            }
        }