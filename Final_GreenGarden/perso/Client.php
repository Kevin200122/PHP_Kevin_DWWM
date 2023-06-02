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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification si le formulaire a été soumis
    if (
        isset($_POST['Id_TICKET']) && isset($_POST['liste_Ticket'])) {
            
            $liste_Ticket = escape_string($_POST['liste_Ticket']);
            $cat_parent = $_POST['Id_Ticket'];
            
            if ($cat_parent!=""){
                $stmt = $conn->prepare("SELECT COUNT(*) AS total from liste_Ticket");
                $stmt->bindValue(':libc', $liste_Ticket);
                $stmt->execute();
                $liste =  $stmt->fetch(PDO::FETCH_ASSOC);
                $totalcat=$liste['total'];
                
                if ($totalcat<1){
                    try {
                        $stmt = $conn->prepare("INSERT INTO t_d_Ticket (Libelle, Id_Ticket)
                        VALUES (:libc, :catparent)");
                        $stmt->bindValue(':libc', $liste_Ticket);
                        $stmt->bindValue(':catparent',  $cat_parent);
                        $stmt->execute();
                        $Ticket_id = $conn->lastInsertId();
                    } catch (PDOException $e) {
                        echo "Erreur: " . $e->getMessage();
                        exit();
                    }
                }
                else{
                    echo 'Votre ticket ici:';
                }
            }
            else{
                $stmt = $conn->prepare("INSERT INTO t_d_Ticket (Libelle)
                VALUES (:libc)");
                $stmt->bindValue(':libc', $liste_Ticket);
                $stmt->execute();
                $Ticket_id = $conn->lastInsertId();
                
            }
        }
    }
    ?>
    <html>
    <head>
    
    </head>
    <body>
    <h3>Vos tickets ici:</h3>
    </body>
    </html>