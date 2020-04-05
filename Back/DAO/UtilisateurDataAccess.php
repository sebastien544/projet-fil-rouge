<?php 
include_once ("ConnexionDDB.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


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
        mysqli_query($db, "INSERT INTO utilisateur VALUES (null,'$newFirstName','$newLastName','$newMail', '$newPwd', null, (SELECT MAX(id_compte) FROM compte))");
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

    function afficherDon($mail){
        $db = $this->connectDatabase();
        $rs = mysqli_query($db, 'SELECT e.date, e.montant_don, a.type_animal FROM utilisateur as u INNER JOIN effectuer as e on u.id_utilisateur = e.id_utilisateur INNER JOIN don as d on e.id_don = d.id_don INNER JOIN animal as a on d.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        mysqli_close($db);
        return $data;
    }

    function afficherPet($mail){
        $db = $this->connectDatabase();
        $rs = mysqli_query($db, 'SELECT s.date_signature, p.animaux FROM signe as s INNER JOIN utilisateur as u on s.id_utilisateur = u.id_utilisateur INNER JOIN petition as p on s.id_petition = p.id_petition WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        mysqli_close($db);
        return $data;
    }

    function insertItem($id,$mail){
        try{
        $db = $this->connectDatabase();
        mysqli_query($db, 'INSERT INTO panier VALUES ((SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),'.$id.',1)');
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            mysqli_close($db);
        }
    }

    function selectCart($mail){
        $db = $this->connectDatabase();
        $rs = mysqli_query($db, 'SELECT pr.designation, pr.prix, pr.id_produit, p.quantity FROM produit as pr INNER JOIN panier as p on pr.id_produit = p.id_produit INNER JOIN utilisateur as u on p.id_utilisateur = u.id_utilisateur WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        mysqli_close($db);
        return $data;
    }

    function removeItem($id,$mail){
        try{
        $db = $this->connectDatabase();
        mysqli_query($db, 'DELETE FROM panier WHERE id_produit = '.$id.' AND id_utilisateur = (SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'")');
        mysqli_close($db);
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }
    }

    function updateQuantity($id,$mail,$quantity){
        try{
        $db = $this->connectDatabase();
        mysqli_query($db, 'UPDATE panier SET quantity = "'.$quantity.'" WHERE id_produit='.$id.' AND id_utilisateur=(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'")');
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            mysqli_close($db);
        }
    }

    function insertAddress($tab,$mail){
        try{
            $db = $this->connectDatabase();
            mysqli_query($db, 'INSERT INTO client VALUES (null,"'.$tab['lastname'].'","'.$tab['firstname'].'","'.$tab['phone'].'","'.$tab['email'].'",null,SYSDATE(),(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"))');
            mysqli_query($db, 'INSERT INTO adresse VALUES (null,"'.$tab['address'].'",'.$tab['zip'].',"'.$tab['city'].'","'.$tab['country'].'","'.$tab['state'].'",(SELECT MAX(id_client) FROM client))');
            $rs = mysqli_query($db, 'SELECT * FROM panier');
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            mysqli_query($db, 'INSERT INTO commande VALUES (null,SYSDATE(),(SELECT MAX(id_client) FROM client),'.$data[0]['id_produit'].','.$data[0]['quantity'].')');
            for($i=1;$i<sizeof($data);$i++){
                mysqli_query($db, 'INSERT INTO commande VALUES ((SELECT MAX(id_commande) FROM commande),SYSDATE(),(SELECT MAX(id_client) FROM client),'.$data[$i]['id_produit'].','.$data[$i]['quantity'].')');
            }
            }catch(mysqli_sql_exception $mse){
                throw $mse;
            }finally{
                mysqli_close($db);
            }
    }

   
}
?>