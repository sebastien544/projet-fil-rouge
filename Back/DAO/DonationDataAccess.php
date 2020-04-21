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
        $db->query('INSERT INTO don VALUES (null,'.$don->getAnimal()->getId().')');
        $stmt = $db->prepare('INSERT INTO effectuer VALUES ((SELECT MAX(id_don) FROM don),'.$don->getUser()->getId().',"'.$don->getDate().'", ?,"'.$don->getFrequence().'")');
        $montant = $don->getMontant();
        $stmt->bind_param("i", $montant);
        $stmt->execute();
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
        $rs = $db->query('SELECT e.date, e.montant_don, a.type_animal FROM utilisateur as u INNER JOIN effectuer as e on u.id_utilisateur = e.id_utilisateur INNER JOIN don as d on e.id_don = d.id_don INNER JOIN animal as a on d.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $db->close();
        return $data;
    }
}