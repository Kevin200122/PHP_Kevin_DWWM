CREATE TABLE Client
{
    N°Client INT NOT NULL AUTO_INCREMENT,
    NomClient VARCHAR(50) NOT NULL,
    PrenomClient VARCHAR(50) NOT NULL,

    PRIMARY KEY(N°Client),
}

CREATE TABLE Commande
{
    N°Commande INT NOT NULL AUTO_INCREMENT,
    DATECommande DATE NOT NULL,
    MontantCommande INT NOT NULL,

    PRIMARY KEY(N°Commande),
    FOREIGN KEY(N°Client)
    REFERENCES Client(N°Client),
}

CREATE TABLE SeComposeDe
{
    N°Commande INT NOT NULL AUTO_INCREMENT,
    N°ArticleDe INT NOT NULL AUTO_INCREMENT,
    Qte INT NOT NULL,
    TauxTVA INT NOT NULL,

    FOREIGN KEY (N°Commande) 
    REFERENCES Commande(N°Commande),
    FOREIGN KEY (N°ArticleDe)
    REFERENCES Article(N°Article),
}
CREATE TABLE Article
{
    N°Article INT NOT NULL AUTO_INCREMENT,
    DesignationArticle VARCHAR(100) NOT NULL,
    PUArticle INT NOT NULL,

    PRIMARY KEY(N°Article),
}