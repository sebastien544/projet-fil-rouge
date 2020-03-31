<?php 
include_once ("ConnexionDDB.php");


class UtilisateurDataAccess extends ConnexionDDB {
    
    // Recherche d'un user dans la base de données
    function rechercheUtilisateur($mail){
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
        mysqli_query($db, 'INSERT INTO  compte VALUES (null,10000)');
        $query ="INSERT INTO utilisateur VALUES (null,'$newFirstName','$newLastName','$newMail', '$newPwd', null, (SELECT MAX(id_compte) FROM compte))";
        var_dump($query);
        mysqli_query($db,$query );
        mysqli_close($db);
    } 
    // Déconnexion
    function disconnet(){
        
        session_start();
        session_unset();
        header("location:connexion-objet.php"); // modifier le lien du header 
    }

    function ajout_don($tab, $mail){
        $db = $this->connectDatabase();
        mysqli_query($db, 'INSERT INTO don VALUES (null,(SELECT id_animal FROM animal WHERE type_animal = "'.$tab['animal'].'"))');
        mysqli_query($db, 'INSERT INTO effectuer VALUES ((SELECT MAX(id_don) FROM don),(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),SYSDATE(),'.$tab['amount'].',"'.$tab['frequency'].'")');
        mysqli_close($db);
    }

    function ajout_petition($var, $mail){
        $db =$this->connectDatabase();
       
        $query='INSERT INTO Signe VALUES ('.$var.',(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),SYSDATE())';
      
        mysqli_query($db, $query);
        mysqli_close($db);

    }

    function afficherDon($mail){
        $db = $this->connectDatabase();
        $rs = mysqli_query($db, 'SELECT e.date, e.montant_don, a.type_animal FROM utilisateur as u INNER JOIN effectuer as e on u.id_utilisateur = e.id_utilisateur INNER JOIN don as d on e.id_don = d.id_don INNER JOIN animal as a on d.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        mysqli_close($db);
        return $data;
    }

    function afficherPet($mail){
        $db = $this->connectDatabase();
        $query=('SELECT s.date_signature, a.type_animal FROM Signe as s INNER JOIN utilisateur as u on s.id_utilisateur = u.id_utilisateur INNER JOIN petition as p on s.id_petition = p.id_petition INNER JOIN animal as a on p.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
       
        $rs = mysqli_query($db, $query );
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        mysqli_close($db);
        return $data;
    }
}
?>