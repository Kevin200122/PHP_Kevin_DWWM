<?php
include 'header.php';


// Vérification si l'utilisateur est déjà connecté
if (isset($_SESSION['user_id'])) {
	header('Location: index.php'); // Redirection vers la page d'accueil si l'utilisateur est déjà connecté
	exit();
}

// Traitement de la soumission du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Récupération des données du formulaire en méthode POST
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	// Vérification si l'utilisateur existe déjà dans la base de données
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
	
	$stmt = $conn->prepare("SELECT * FROM t_d_user WHERE login=:login");
	$stmt->bindValue(':login', $login);
	$stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($user) {
		// L'utilisateur existe déjà, affichage d'un message d'erreur
		$error_message = "Ce login est déjà utilisé par un autre utilisateur.";
	} else {
		// Insertion de l'utilisateur dans la base de données
		$password_hash = password_hash($password, PASSWORD_DEFAULT); // Hashage du mot de passe
		$stmt = $conn->prepare("INSERT INTO t_d_user (Login, Password,Id_UserType) 
		VALUES (:login, :mot_de_passe,1)"); //on force le type utilisateur à client
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':mot_de_passe', $password_hash);
		$stmt->execute();
		
		// Récupération de l'identifiant de l'utilisateur inséré
		$user_id = $conn->lastInsertId();
		
		// Connexion automatique de l'utilisateur après son inscription
		$_SESSION['user_id'] = $user_id;
		
		header('Location: index.php'); // Redirection vers la page d'accueil
		exit();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Inscription</title>
</head>

<body>
<h1>Inscription</h1>
<?php if (isset($error_message)) : ?>
	<p><?php echo $error_message; ?></p>
	<?php endif; ?>
	
	<form method="POST" id="UneInscription">
	<label for="Type_utilisateurs">Vous êtes un:</label>
	
	<select name="Utilisateur" id="Un_Utilisateur">
	<option value="">Choisir une option:</option>
	<option value="dog">SAV</option>
	<option value="cat">Commercial</option>
	<option value="hamster">Client</option>
	</select>
	<label for="login">Votre Login :</label>
	<input type="login" id="login" name="login" required><br><br>
	<label for="password">Mot de passe :</label>
	<input type="password" id="password" name="password" required><br><br>
	<label for="password" id="confirmer" required></label>
	<label for="Email">Votre Email:</label>
	<input type="Email" id="UnEmail" required><br><br>
	<input type="submit" value="S'inscrire">
	
	</form>
	<p>Déjà inscrit ? <a href="login.php" id="Retour_Connexion">Se connecter</a></p>
	</body>
	
	</html>