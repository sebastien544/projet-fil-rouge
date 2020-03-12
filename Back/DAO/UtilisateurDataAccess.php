<?php 
include_once ("ConnexionDDB.php");


class UtilisateurDataAccess extends ConnexionDDB {
    
    // Recherche d'un user dans la base de données
    function rechercheUtilisateur($mail){
    
        $req = "SELECT * FROM utilisateur WHERE mail = '$mail'";
        var_dump($req);
        $db = $this->connectDatabase();
        $rs = mysqli_query($db, "SELECT * FROM utilisateur WHERE mail = '$mail'");
        $data = mysqli_fetch_assoc($rs);
        mysqli_close($db);
        return $data;
    }
    // Inscription d'un nouvel user dans la bbd
    function inscription($newMail, $newPwd, $newFirstName, $newLastName ){
        $db = $this->connectDatabase();
        $newPwd = password_hash("$newPwd", PASSWORD_DEFAULT);
        mysqli_query($db, "INSERT INTO utilisateur VALUES (null,'$newFirstName','$newMail', '$newPwd',  '$newLastName', null, null)");
        mysqli_close($db);
    } 
    // Déconnexion
    function disconnet(){
        
        session_start();
        session_unset();
        header("location:connexion-objet.php"); // modifier le lien du header 
    }
}
?>