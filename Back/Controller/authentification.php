<?php 
include_once (__DIR__ . "/../Service/UtilisateurService.php");


        if(isset($_POST["valider"])){
                $service = new UtilisateurService();
                $data = $service->rechercheUser($_POST["mail"]);
                
                if($data && $service->checkUserNameAndPassword($data['mail'], $data['password'], /*$data['role'],*/ $_POST)){
                        header("location:home.php?role=");
                }
                else {
                        header("location:connexion-objet.php?role=error");
                }   
        }

        if(isset($_POST["validation"]) && $_POST["mail"] && $_POST["password"] == $_POST["password_verification"]){
            $service = new UtilisateurService();
            $isAdded = $service->newAccount($_POST);
            if(!$isAdded){
                header("location:connexion.php?account=exist");
                
            }
            else {
                header("location:connexion-objet.php");
            }
        }

?>