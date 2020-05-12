<?php
include_once ('ConnexionDDB.php');

class ClientDAO extends ConnexionDDB {

    public function createCustomer(Client $client)
    {
        try{
            $db = $this->connectDatabase();
            $stmt = $db->prepare('INSERT INTO adresse VALUES (null, ?, ?, ?, ?, ?)');
            $stmt->bind_param("sisss", $client->getAdresse()->getAdresse(), $client->getAdresse()->getCodePostal(), $client->getAdresse()->getVille(), $client->getAdresse()->getPays());
            $stmt->execute();

            $stmt1 = $db->prepare('INSERT INTO client VALUES (null, ?, ?, ?, ?, null, SYSDATE(), (SELECT id_utilisateur FROM utilisateur WHERE mail = "'.$mail.'"),(SELECT MAX(id_adresse) FROM adresse))');
            $stmt1->bind_param("ssis", $client->getNom(), $client->getPrenom(), $client->getTel(), $client->getMail());
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
}