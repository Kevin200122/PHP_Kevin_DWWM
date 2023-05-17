CREATE TABLE FOURNISSEUR(
    Id_fournisseur INT NOT NULL AUTO_INCREMENT,
    Achat_fournisseur,

    PRIMARY KEY(Id_fournisseur)
    FOREIGN KEY(Ref_Produit)
    REFERENCES Produit(Ref_Produit)
)
CREATE TABLE Produit(
    Ref_Produit INT NULL AUTO_INCREMENT,
    Prix_Produit INT,

    PRIMARY KEY(Ref_Produit)
    FOREIGN KEY(Id_fournisseur)
    REFERENCES FOURNISSEUR(Id_fournisseur)

    FOREIGN KEY(Id_Libelle)
    REFERENCES Libelle(Id_Libelle)
)

CREATE TABLE Acheter(
    Ref_Produit INT NOT NULL AUTO_INCREMENT,
    Id_fournisseur INT NOT NULL AUTO_INCREMENT,

    FOREIGN KEY(Ref_Produit)
    REFERENCES Produit(Ref_Produit)

    FOREIGN KEY(Id_fournisseur)
    REFERENCES FOURNISSEUR(Id_fournisseur)
)

CREATE TABLE Libelle(
    Id_Libelle INT NOT NULL AUTO_INCREMENT,
    Libelle_court VARCHAR(40),
    Libelle_long VARCHAR(100),

    PRIMARY KEY(Id_Libelle)
    FOREIGN KEY(Ref_Produit)
    REFERENCES Produit(Ref_Produit)
)
CREATE TABLE Commande(
    Num_Commande INT NOT NULL AUTO_INCREMENT,
    Date_Commande Date NOT NULL,
    Quantite_commande INT,

    PRIMARY KEY(Num_Commande)
    FOREIGN KEY(Id_gestion_commande)
    REFERENCES GestionCommande(Id_gestion_commande)
)

CREATE TABLE GestionCommande(
    Id_gestion_commande INT NOT NULL AUTO_INCREMENT,
    Creation_GestionCommande VARCHAR(120),
    Ajout_Prod_GestionCommande VARCHAR(120),
    Consultation_Client_Retard_GestionCommande Varchar(200),

    PRIMARY KEY(Id_gestion_commande)
    FOREIGN KEY(Num_Commande)
    REFERENCES Commande(Num_Commande)
)

