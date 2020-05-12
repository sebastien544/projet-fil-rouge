<?php 
include_once ('../DAO/PanierDataAccess.php');
include_once ('../Model/ProduitPanier.php');
include_once ('../Model/Utilisateur.php');



    class PanierService {

        private $dao;
        private $user;

        public function __construct()
        {
            $this->dao = new PanierDataAccess();
            $this->user = new Utilisateur();
        }

        public function insertItem(int $id,string $mail)
        {   
            $item = new ProduitPanier();
            $item        ->getUser()->currentUser($mail);
            $item        ->setQuantite(1)
                        ->setIdProduit($id);
            $this->dao  ->insertItem($item);
              
        }

        public function afficherPanier(string $mail)
        {   
            $this->user->currentUser($mail);
            return $this->dao->afficherPanier($this->user);
        }

        public function removeItem(int $id, string $mail)
        {
            $this->user->currentUser($mail);
            $this->dao->removeItem($id, $this->user);
        }

        public function updateQuantity(int $id,string $mail,int $quantity)
        {
            $this->user->currentUser($mail);
            $this->dao->updateQuantity($id, $this->user, $quantity);
        }

        public function rechercheCodePromo(string $codePromo)
        {
            $this->dao->rechercheCodePromo($codePromo);
        }
        
        public function afficherProduit($pageActuelle, $categorie)
        {
          $data= $this->dao->afficherProduit($pageActuelle, $categorie);
          return $data;

        }

        public function afficherNumberPage($categorie)
        {
            $data= $this->dao->afficherNumberPage($categorie);
            $numberPage= ceil($data[0]['count(id_produit)']/6);
            return $numberPage;
        }
       
    }





    