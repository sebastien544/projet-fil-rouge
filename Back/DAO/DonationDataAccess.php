<?php 
include_once ("ConnexionDDB.php");
include_once ('../Model/Donation.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class DonationDataAccess extends ConnexionDDB  
{
    /**
     * Ajoute un don 
     *
     * @param Donation $don
     * @return void
     */
    function ajoutDon(Donation $don)
    {
        $db = $this->connectDatabase();
        $stmt = $db->prepare('INSERT INTO don VALUES (null, ?,"'.$don->getDate().'","'.$don->getFrequence().'",'.$don->getUser()->getId().','.$don->getIdAnimal().')');
        $montant = $don->getMontant();
        $stmt->bind_param("i", $montant);
        $stmt->execute();
        $db->query("UPDATE compte SET quantite_point = (quantite_point - ".$don->getMontant().") WHERE id_compte = ".$don->getUser()->getId()."");
        if($don->getFrequence() == 'Monthly')
        {
            $db->query("CREATE DEFINER=`root`@`localhost` EVENT `example2` ON SCHEDULE EVERY 1 MONTH STARTS SYSDATE() ON COMPLETION NOT PRESERVE ENABLE DO UPDATE compte SET quantite_point = (quantite_point - ".$don->getMontant().") WHERE id_compte = ".$don->getUser()->getId()."");
        }
        $db->close();
    }

    /**
     * Affiche le(s) don(s) de l'utilisateur
     *
     * @param string $mail
     * @return array
     */
    function afficherDon(string $mail) : array
    {
        $db = $this->connectDatabase();
        $rs = $db->query('SELECT d.date, d.montant, a.type_animal FROM utilisateur as u  INNER JOIN don as d on u.id_utilisateur = d.id_utilisateur INNER JOIN animal as a on d.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $db->close();
        return $data;
    }

    /**
     * Recherche un animal 
     *
     * @param string $typeAnimal
     * @return array
     */
    public function findAnimalBy(string $typeAnimal) :  array
    {
        $db = $this->connectDatabase();
        $rs = $db->query('SELECT * FROM animal WHERE type_animal = "'.$typeAnimal.'"');
        $data = mysqli_fetch_assoc($rs);
        $db->close();
        $rs->free();
        return $data;
    }
}