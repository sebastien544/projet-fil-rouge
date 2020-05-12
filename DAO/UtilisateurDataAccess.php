<?php 
include_once ("ConnexionDDB.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


class UtilisateurDataAccess extends ConnexionDDB 
{
    
    /**
     * Recherche un utilisateur dans la base de données
     *
     * @param string $mail
     * @return array 
     */
    function rechercheUtilisateur(string $mail) : array
    {
        $db = $this->connectDatabase();
        $rs = $db->query("SELECT * FROM utilisateur WHERE mail = '$mail'");
        $data = mysqli_fetch_assoc($rs);
        $db->close();
        $rs->free();
        return $data;
    }

    /**
     * Inscrit un nouvel utilisateur 
     *
     * @param string $newMail
     * @param string $newPwd
     * @param string $newFirstName
     * @param string $newLastName
     * @return void
     */
    function inscription(string $newMail,string $newPwd,string $newFirstName,string $newLastName )
    {
        $db = $this->connectDatabase();
        $newPwd = password_hash("$newPwd", PASSWORD_DEFAULT);
        mysqli_query($db, 'INSERT INTO  compte VALUES (null,10000)');
        $stmt = $db->prepare("INSERT INTO utilisateur VALUES (null, ?, ?, ?, ?, null, (SELECT MAX(id_compte) FROM compte))");
        $stmt->bind_param("ssss", $newFirstName,$newLastName,$newMail,$newPwd);
        $stmt->execute();
        $db->close();
    } 


    // Déconnexion
    function disconnet()
    {
        session_start();
        session_unset();
        header("location:connexion-objet.php"); // modifier le lien du header 
    }

    

   
  


}
?>