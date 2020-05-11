<?php

include_once ('ConnexionDDB.php');

    Class PanierDataAccess extends ConnexionDDB {

        /**
         * Ajoute un article au panier
         *
         * @param ProduitPanier $item
         * @return void
         */
        public function insertItem(ProduitPanier $item)
        {
            try{
            $db = $this->connectDatabase();
            $db->query('INSERT INTO panier VALUES ('.$item->getUser()->getId().','.$item->getIdProduit().','.$item->getQuantite().')');
            }catch(mysqli_sql_exception $mse){
                throw $mse;
            }finally{
                $db->close();
            }
        }

        /**
         * affiche le panier d'un utilisateur
         *
         * @param Utilisateur $user
         * @return void
         */
        public function afficherPanier(Utilisateur $user){
            $db = $this->connectDatabase();
            $rs = $db->query('SELECT pr.designation, pr.prix, pr.id_produit, p.quantity FROM produit as pr INNER JOIN panier as p on pr.id_produit = p.id_produit WHERE id_utilisateur = '.$user->getId().' ');
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            $db->close();
            return $data;
        }

        /**
         * Supprime un article du panier
         *
         * @param int $id
         * @param Utilisateur $user
         * @return void
         */
        public function removeItem(int $id,Utilisateur $user)
        {
            try{
            $db = $this->connectDatabase();
            $db->query('DELETE FROM panier WHERE id_produit = '.$id.' AND id_utilisateur = '.$user->getId().'');
            $db->close();
            }catch(mysqli_sql_exception $mse){
                throw $mse;
            }
        }

        /**
         * Modifie la quantité d'un article dans le panier
         *
         * @param int $id
         * @param Utilisateur $user
         * @param int $quantity
         * @return void
         */
        public function updateQuantity(int $id,Utilisateur $user,int $quantity)
        {
            try{
            $db = $this->connectDatabase();
            $db->query('UPDATE panier SET quantity = "'.$quantity.'" WHERE id_produit='.$id.' AND id_utilisateur = '.$user->getId().'');
            }catch(mysqli_sql_exception $mse){
                throw $mse;
            }finally{
                $db->close();
            }
        }

        /**
         * Compare le code promo entré par l'utilisateur avec la BDD 
         *
         * @param string $codePromo
         * @return void
         */
        public function rechercheCodePromo(string $codePromo)
        {
            try{
                $db = $this->connectDatabase();
                $stmt = $db->prepare('SELECT reduction from promotions where code_promo = "?"');
                $stmt->bind_param("s", $codePromo);
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

        public function afficherProduit($pageActuelle, $categorie)
        {
            
            $db = $this->connectDatabase();
            $decalage = ($pageActuelle-1)*6;    

            $rs = $db->query('SELECT * FROM produit WHERE id_categorie=(SELECT id_categorie FROM categorie where categorie = "'.$categorie.'") LIMIT 6 OFFSET '.$decalage.'');
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            $db->close();
            return $data;
        }

        public function afficherNumberPage($categorie)
        {
            $db = $this->connectDatabase();
            $rs = $db->query('SELECT count(id_produit) FROM produit WHERE id_categorie=(SELECT id_categorie FROM categorie where categorie = "'.$categorie.'") ');
            $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            $db->close();
            return $data;
        }

    }