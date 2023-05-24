<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="CSS/style.css"> 
<title>Mon blog</title>
</head>
<body>
<div id="global">
<header> 
<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a> <p>Hello et bienvenue !!!!</p> 
</header> 
<body id="contenu">
<?php 
$bdd = new PDO("mysql:host=database:3306;dbname=boggy;charset=utf8",'VOTRE USER','VOTRE MDP');
$billets = $bdd->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM t_billet order by BIL_ID desc');
// affichage 
require 'vueAccueil.php'; 
?>
</body>
</html>


