<?php 
include_once ("ConnexionDDB.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class PetitionDataAccess extends ConnexionDDB  {
        
        function ajoutPetition($pet, $idPet)
        {
            $db =$this->connectDatabase();
            $query= 'INSERT INTO Signe VALUES ('.$idPet.','.$pet->getUser().',"'.$pet->getDate().'"';
            mysqli_query($db, $query);
            $db->close();
        }

        function afficherPetitions($mail)
        {
            $db = $this->connectDatabase();
            $query=('SELECT s.id_petition, s.date_signature, a.type_animal FROM Signe as s INNER JOIN utilisateur as u on s.id_utilisateur = u.id_utilisateur INNER JOIN petition as p on s.id_petition = p.id_petition INNER JOIN animal as a on p.id_animal = a.id_animal WHERE u.mail = "'.$mail.'"');
            $rs = mysqli_query($db, $query );
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            mysqli_close($db);
            return $data;
        }

        function selectPetSigne ($var,$mail)
        {
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

    }