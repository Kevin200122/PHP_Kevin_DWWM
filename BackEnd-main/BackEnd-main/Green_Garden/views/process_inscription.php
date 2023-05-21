<?php
// Récupérer les données du formulaire
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$client_type = $_POST['client_type'];

// Expressions régulières pour valider les données du formulaire
$login_regex = '/^[a-zA-Z0-9-_]{3,}$/'; // Lettres, chiffres, tiret, underscore, au moins 3 caractères
$email_regex = '/^\S+@\S+\.\S+$/'; // Format d'email basique
$password_regex = '/^.{8,}$/'; // Au moins 8 caractères

// Valider les données avec les regex
if (!preg_match($login_regex, $login)) {
  echo "Le login est invalide.";
} elseif (!preg_match($email_regex, $email)) {
  echo "L'email est invalide.";
} elseif (!preg_match($password_regex, $password)) {
  echo "Le mot de passe doit contenir au moins 8 caractères.";
} elseif ($password !== $password_confirm) {
  echo "Les mots de passe ne correspondent pas.";
} else {
  // Insérer les données dans la base de données, etc.
}
?>
