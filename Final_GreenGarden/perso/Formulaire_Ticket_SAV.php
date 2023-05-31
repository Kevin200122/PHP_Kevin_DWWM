<?php
include 'header.php';

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


<!DOCTYPE html>
<html>
<body>
   <h1>Création Ticket</h1>

   <form method="POST" id= "Formulaire_Ticket">
    <label for="text">Numéro de commande:</label>
    <input type="text" id="Numero_de_commande" ><br /><br />
   <label for ="text" >Description:</label>
   <input type="text" id="Une_description"><br><br>
   <label for="text">Type de Ticket:</label>
      <select name="Type_de_Ticket" id="Ticket">
        <option value="Ticket_simple">Ticket simple</option>
        <option value="Ticket_SAV">Ticket SAV</option>
       
      </select><br /><br />
   
    <button> Validation</button>



   </form>
</body>
</html>