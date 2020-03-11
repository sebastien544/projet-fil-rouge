#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        id_role Int  Auto_increment  NOT NULL ,
        role    Varchar (50) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: petition
#------------------------------------------------------------

CREATE TABLE petition(
        id_petition Int  Auto_increment  NOT NULL ,
        animaux     Varchar (50) NOT NULL
	,CONSTRAINT petition_PK PRIMARY KEY (id_petition)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal
#------------------------------------------------------------

CREATE TABLE Animal(
        id_animal   Int  Auto_increment  NOT NULL ,
        type_animal Varchar (50) NOT NULL
	,CONSTRAINT Animal_PK PRIMARY KEY (id_animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stock
#------------------------------------------------------------

CREATE TABLE stock(
        id_stock      Int  Auto_increment  NOT NULL ,
        stock_produit Varchar (50) NOT NULL
	,CONSTRAINT stock_PK PRIMARY KEY (id_stock)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie Int  Auto_increment  NOT NULL ,
        categorie    Varchar (50) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        id_produit   Int  Auto_increment  NOT NULL ,
        designation  Varchar (50) NOT NULL ,
        prix         DECIMAL (15,3)  NOT NULL ,
        date_stock   Date NOT NULL ,
        id_stock     Int NOT NULL ,
        id_categorie Int NOT NULL
	,CONSTRAINT Produit_PK PRIMARY KEY (id_produit)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: don
#------------------------------------------------------------

CREATE TABLE don(
        id_don    Int NOT NULL ,
        id_animal Int NOT NULL
	,CONSTRAINT don_PK PRIMARY KEY (id_don)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_client      Int  Auto_increment  NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        telephone      Numeric NOT NULL ,
        mail           Varchar (5) NOT NULL ,
        password       Varchar (50) NOT NULL ,
        date           Date NOT NULL ,
        id_utilisateur Int NOT NULL
	,CONSTRAINT Client_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utlisateur
#------------------------------------------------------------

CREATE TABLE utlisateur(
        id_utilisateur Int  Auto_increment  NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        mail           Varchar (50) NOT NULL ,
        password       Varchar (50) NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        id_role        Int NOT NULL ,
        id_compte      Int NOT NULL
	,CONSTRAINT utlisateur_PK PRIMARY KEY (id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: compte
#------------------------------------------------------------

CREATE TABLE compte(
        id_compte      Int  Auto_increment  NOT NULL ,
        quantite_point Varchar (50) NOT NULL ,
        id_utilisateur Int NOT NULL
	,CONSTRAINT compte_PK PRIMARY KEY (id_compte)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adresse
#------------------------------------------------------------

CREATE TABLE Adresse(
        no_adresse  Int  Auto_increment  NOT NULL ,
        adresse     Varchar (10) NOT NULL ,
        code_postal Varchar (10) NOT NULL ,
        ville       Varchar (50) NOT NULL ,
        pays        Varchar (50) NOT NULL ,
        Region      Varchar (50) NOT NULL ,
        id_client   Int NOT NULL
	,CONSTRAINT Adresse_PK PRIMARY KEY (no_adresse)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        No_commande   Int  Auto_increment  NOT NULL ,
        no_livraison  Int NOT NULL ,
        date_commande Date NOT NULL ,
        id_client     Int NOT NULL
	,CONSTRAINT commande_PK PRIMARY KEY (No_commande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Signe
#------------------------------------------------------------

CREATE TABLE Signe(
        id_petition    Int NOT NULL ,
        id_utilisateur Int NOT NULL ,
        date_signature Date NOT NULL
	,CONSTRAINT Signe_PK PRIMARY KEY (id_petition,id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Effectuer
#------------------------------------------------------------

CREATE TABLE Effectuer(
        id_don         Int NOT NULL ,
        id_utilisateur Int NOT NULL ,
        montant        Varchar (50) NOT NULL ,
        date           Date NOT NULL ,
        montant_don    Int NOT NULL
	,CONSTRAINT Effectuer_PK PRIMARY KEY (id_don,id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Panier
#------------------------------------------------------------

CREATE TABLE Panier(
        No_commande Int NOT NULL ,
        id_produit  Int NOT NULL ,
        valider     Bool NOT NULL
	,CONSTRAINT Panier_PK PRIMARY KEY (No_commande,id_produit)
)ENGINE=InnoDB;




ALTER TABLE Produit
	ADD CONSTRAINT Produit_stock0_FK
	FOREIGN KEY (id_stock)
	REFERENCES stock(id_stock);

ALTER TABLE Produit
	ADD CONSTRAINT Produit_categorie1_FK
	FOREIGN KEY (id_categorie)
	REFERENCES categorie(id_categorie);

ALTER TABLE don
	ADD CONSTRAINT don_Animal0_FK
	FOREIGN KEY (id_animal)
	REFERENCES Animal(id_animal);

ALTER TABLE Client
	ADD CONSTRAINT Client_utlisateur0_FK
	FOREIGN KEY (id_utilisateur)
	REFERENCES utlisateur(id_utilisateur);

ALTER TABLE Client 
	ADD CONSTRAINT Client_utlisateur0_AK 
	UNIQUE (id_utilisateur);

ALTER TABLE utlisateur
	ADD CONSTRAINT utlisateur_role0_FK
	FOREIGN KEY (id_role)
	REFERENCES role(id_role);

ALTER TABLE utlisateur
	ADD CONSTRAINT utlisateur_compte1_FK
	FOREIGN KEY (id_compte)
	REFERENCES compte(id_compte);

ALTER TABLE utlisateur 
	ADD CONSTRAINT utlisateur_compte0_AK 
	UNIQUE (id_compte);

ALTER TABLE compte
	ADD CONSTRAINT compte_utlisateur0_FK
	FOREIGN KEY (id_utilisateur)
	REFERENCES utlisateur(id_utilisateur);

ALTER TABLE compte 
	ADD CONSTRAINT compte_utlisateur0_AK 
	UNIQUE (id_utilisateur);

ALTER TABLE Adresse
	ADD CONSTRAINT Adresse_Client0_FK
	FOREIGN KEY (id_client)
	REFERENCES Client(id_client);

ALTER TABLE commande
	ADD CONSTRAINT commande_Client0_FK
	FOREIGN KEY (id_client)
	REFERENCES Client(id_client);

ALTER TABLE Signe
	ADD CONSTRAINT Signe_petition0_FK
	FOREIGN KEY (id_petition)
	REFERENCES petition(id_petition);

ALTER TABLE Signe
	ADD CONSTRAINT Signe_utlisateur1_FK
	FOREIGN KEY (id_utilisateur)
	REFERENCES utlisateur(id_utilisateur);

ALTER TABLE Effectuer
	ADD CONSTRAINT Effectuer_don0_FK
	FOREIGN KEY (id_don)
	REFERENCES don(id_don);

ALTER TABLE Effectuer
	ADD CONSTRAINT Effectuer_utlisateur1_FK
	FOREIGN KEY (id_utilisateur)
	REFERENCES utlisateur(id_utilisateur);

ALTER TABLE Panier
	ADD CONSTRAINT Panier_commande0_FK
	FOREIGN KEY (No_commande)
	REFERENCES commande(No_commande);

ALTER TABLE Panier
	ADD CONSTRAINT Panier_Produit1_FK
	FOREIGN KEY (id_produit)
	REFERENCES Produit(id_produit);