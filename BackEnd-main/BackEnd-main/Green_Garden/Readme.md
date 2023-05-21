# Arborescence du site Green Garden

docker-compose up -d

mysql -u root -pmy-secret-pw

greengarden/
│
├── css/
│   └── styles.css
│
├── models/
│   ├── product.php
│   └── user.php
│
├── views/
│   ├
│   ├── catalogue.php
│   ├── consult_produit.php
│   ├── panier.php
│   ├── inscription.php
│   ├── login.php
│   └── validation_panier.php
│
├── controllers/
│   ├── productController.php
│   └── userController.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
└── index.php

Construire le squelette du site e-commerce Green Garden utiliser css ou bootstrap

- Index.php: la page d'acceuil avec un menu allant vers les pages catalogue, Ajouter/modifier un produit, Ajouter/modifier un utilisateur,
        et Voir mon panier
    Une zone avec des boutons Login et Inscription
    Une zone avec "Bonjour xxxx" où xxxx est le login de l'utilisateur si celui-ci est authentifié

- Catalogue.php: renvoit tous les produits ou via une zone de recherche sur le nom du produit un ou plusieurs produits
- Consult_produit.php: permet de voir le détail d'un produit en particulier
- Panier.php: permettant de voir ce qui a été mis dans le panier
- Inscription.php: formulaire d'inscription permettant d'inscrire un client en plus d'un utilisateur avec les informations basiques:
        *Login
        * Email
        *Mot de passe (avoir une partie ressaisie du mot de passe pour vérification)
        * Type de client (Particulier/professionnel)
- Login.php: formulaire d'authentification
- validation_panier.php: lors de la validation du panier (passage obligatoire via panier.php),
        saisie des informations du client (adresse livraison, adresse facturation, type de paiement, type de livraison)
