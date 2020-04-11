<?php 
include_once ("ConnexionDDB.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


class UtilisateurDataAccess extends ConnexionDDB {
    
    // Recherche d'un user dans la base de données
    function rechercheUtilisateur($mail){
        $db = $this->connectDatabase();
        $rs = $db->query("SELECT * FROM utilisateur WHERE mail = '$mail'");
        $data = mysqli_fetch_assoc($rs);
        $db->close();
        $rs->free();
        return $data;
    }
    // Inscription d'un nouvel user dans la bbd
    function inscription($newMail, $newPwd, $newFirstName, $newLastName ){
        $db = $this->connectDatabase();
        $newPwd = password_hash("$newPwd", PASSWORD_DEFAULT);
        mysqli_query($db, 'INSERT INTO  compte VALUES (null,10000)');
        $stmt = $db->prepare("INSERT INTO utilisateur VALUES (null, ?, ?, ?, ?, null, (SELECT MAX(id_compte) FROM compte))");
        $stmt->bind_param("ssss", $newFirstName,$newLastName,$newMail,$newPwd);
        $stmt->execute();
        $db->close();
    } 
    // Déconnexion
    function disconnet(){
        
        session_start();
        session_unset();
        header("location:connexion-objet.php"); // modifier le lien du header 
    }

    function ajout_don($tab, $mail){
        $db = $this->connectDatabase();
        $db->query('INSERT INTO don VALUES (null,(SELECT id_animal FROM animal WHERE type_animal = "'.$tab['animal'].'"))');
        $stmt = $db->prepare('INSERT INTO effectuer VALUES ((SELECT MAX(id_don) FROM don),(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),SYSDATE(), ?,"'.$tab['frequency'].'")');
        $stmt->bind_param("i", $tab['amount']);
        $stmt->execute();
        $db->close();
    }

    function afficherDon($mail){
        $db = $this->connectDatabase();
        $rs = $db->query('SELECT e.date, e.montant_don, a.type_animal FROM utilisateur as u INNER JOIN effectuer as e on u.id_utilisateur = e.id_utilisateur INNER JOIN don as d on e.id_don = d.id_don INNER JOIN animal as a on d.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $db->close();
        return $data;
    }

    function afficherPet($mail){
        $db = $this->connectDatabase();
        $query=('SELECT s.id_petition, s.date_signature, a.type_animal FROM Signe as s INNER JOIN utilisateur as u on s.id_utilisateur = u.id_utilisateur INNER JOIN petition as p on s.id_petition = p.id_petition INNER JOIN animal as a on p.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
        $rs = mysqli_query($db, $query );
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $db->close();
        return $data;
    }
    
    function ajout_petition($var, $mail){
        $db =$this->connectDatabase();

        $query= 'INSERT INTO Signe VALUES ('.$var.',(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),SYSDATE())';
        mysqli_query($db, $query);
        $db->close();

    }

    function insertItem($id,$mail){
        try{
        $db = $this->connectDatabase();
        $db->query('INSERT INTO panier VALUES ((SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),'.$id.',1)');
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            $db->close();
        }
    }

    function selectCart($mail){
        $db = $this->connectDatabase();
        $rs = $db->query('SELECT pr.designation, pr.prix, pr.id_produit, p.quantity FROM produit as pr INNER JOIN panier as p on pr.id_produit = p.id_produit INNER JOIN utilisateur as u on p.id_utilisateur = u.id_utilisateur WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $db->close();
        return $data;
    }

    function removeItem($id,$mail){
        try{
        $db = $this->connectDatabase();
        $db->query('DELETE FROM panier WHERE id_produit = '.$id.' AND id_utilisateur = (SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'")');
        $db->close();
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }
    }

    function updateQuantity($id,$mail,$quantity){
        try{
        $db = $this->connectDatabase();
        $db->query('UPDATE panier SET quantity = "'.$quantity.'" WHERE id_produit='.$id.' AND id_utilisateur=(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'")');
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            $db->close();
        }
    }

    function insertAddress($tab,$mail){
        try{
            $db = $this->connectDatabase();
            $stmt = $db->prepare('INSERT INTO adresse VALUES (null, ?, ?, ?, ?, ?)');
            $stmt->bind_param("sisss", $tab['address'],$tab['zip'],$tab['city'],$tab['country'],
            $tab['state']);
            $stmt->execute();

            $stmt1 = $db->prepare('INSERT INTO client VALUES (null, ?, ?, ?, ?, null, SYSDATE(), (SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),(SELECT MAX(id_adresse) FROM adresse))');
            $stmt1->bind_param("ssis", $tab['lastname'], $tab['firstname'], $tab['phone'], $tab['email']);
            $stmt1->execute();

            $rs = $db->query('SELECT * FROM panier WHERE id_utilisateur =(SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'")');
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            $db->query('INSERT INTO commande VALUES (null,SYSDATE(),(SELECT MAX(id_client) FROM client),'.$data[0]['id_produit'].','.$data[0]['quantity'].')');
            for($i=1;$i<sizeof($data);$i++){
                $db->query('INSERT INTO commande  VALUES ((SELECT MAX(co.id_commande) FROM commande as co),SYSDATE(),(SELECT MAX(id_client) FROM client),'.$data[$i]['id_produit'].','.$data[$i]['quantity'].')');
                $db->query('INSERT INTO stock VALUES ((SELECT id_stock FROM produit WHERE id_produit = '.$data[$i]['id_produit'].'),((SELECT s.stock_produit FROM stock as s INNER JOIN produit as p on s.id_stock = p.id_stock WHERE id_produit='.$data[$i]['id_produit'].' ORDER BY date_stock DESC LIMIT 1)-(SELECT quantity FROM panier WHERE id_produit='.$data[$i]['id_produit'].')),SYSDATE())');
            }
            $db->query('DELETE FROM panier');
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            $db->close();
        }

    }

    function selectPetSigne ($var,$mail){
        try{
            $db = $this->connectDatabase();
            $rs= $db->query('SELECT * from Signe where id_petition = '.$var.' AND id_utilisateur = (SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'") ');
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            return $data;
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            $db->close();
        }
    }

    function selectPromo($var){
        try{
            $db = $this->connectDatabase();
            $stmt = $db->prepare('SELECT reduction from promotions where code_promo = "?"');
            $stmt->bind_param("s", $var);
            $stmt->execute();
            $rs = $stmt->get_result();
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            return $data;
        }catch(mysqli_sql_exception $mse){
            throw $mse;
        }finally{
            $db->close();
        }
    }

}
?>