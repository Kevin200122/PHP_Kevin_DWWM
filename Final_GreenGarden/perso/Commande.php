<?php
include 'header.php';
// peut mettre <?= à la place de <?php

?>

<?php
// peut mettre <?= à la place de <?php




// Récupération des informations de l'utilisateur connecté
$host = "localhost"; // Nom d'hôte de la base de données
$user = "root"; // Nom d'utilisateur de la base de données
$password_db = ""; // Mot de passe de la base de données
$dbname = "greengarden"; // Nom de la base de données

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password_db);
    // configuration pour afficher les erreurs pdo
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
<?php
function ajouter($Photo, $Prix_Achat, $Nom_cours, $Nom_Long)
{
    
    $req = $access->prepare("INSERT INTO Produit (photo, Prix_Achat, Nom_cours, Nom_Long) VALUES ($Photo, $Prix_Achat, $Nom_cours, $Nom_Long)");
    
    $req->execute(array($Photo, $Nom_cours, $Nom_Long, $Prix_Achat));
    
    $req->closeCursor();
    
}

function afficher()
{
    $req=$access->prepare("SELECT * FROM Produit ORDER BY id DESC");
    
    $req->execute();
}

function supprimer($Id)
{
    $req=$access->prepare("DELETE FROM Produit WHERE id=?");
    
    $req->execute(array($id));
}

?>
<html>
<head>

</head>
<body>
<h1>Commande:</h1><br>
<form method="post" enctype="multipart/form-data">

<br>
<div>

<label for="commande">Num Commande:</label>

<input type="text" id="CommandeClient">

</div><br /><br />
<button type="submit">Afficher commande</button>
</form>
<footer>
<p>Green Garden - Tous droits réservés</p>
<div>Ce site a été réalisé par un développeur</div>
</footer>
</body>
</html>
<?php include 'footer.php'; ?>  