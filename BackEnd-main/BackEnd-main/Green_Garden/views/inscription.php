<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<header>
    <?php include('../includes/header.php'); ?>
</header>

<div class="container">
    <h1>Inscription</h1>
    <form action="process_inscription.php" method="post">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirm">Confirmez le mot de passe</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
        </div>

        <div class="form-group">
            <label for="client_type">Type de client</label>
            <select class="form-control" id="client_type" name="client_type" required>
                <option value="particulier">Particulier</option>
                <option value="professionnel">Professionnel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">S'inscrire</button>
        <a href="./authenticate.php" class="btn btn-secondary">Déja inscrit?<br>Connectez-vous</a>
    </form>
</div>

<footer>
    <?php include('../includes/footer.php'); ?>
    <!-- Le contenu du pied de page (liens, copyright, etc.) sera chargé à partir du fichier footer.php -->
</footer>
</body>
</html>