<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Garden - Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <header>

    <?php include('../includes/header.php'); 
          include_once 'cart_functions.php';
          include 'config.php';
    ?>
    <!-- Le contenu de l'en-tête (menu, logo, etc.) sera chargé à partir du fichier header.php -->
    <style>
      .card {
        width: 18rem;
        margin: 1rem;
        display: inline-block;
      }
      .catalogue{
        text-align: center;
      }
      h2 {
        text-align: center;
        margin-top: 2rem;
      }
    </style>
  </header>
  <div class="catalogue mt-5">
      <a href='catalogue.php'<i class="fas fa-leaf"></i> Catalogue</a>
    </div>
  <main class="container flex-grow-1">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://as2.ftcdn.net/v2/jpg/04/23/18/89/1000_F_423188914_dxbS02ZkPB7QMud1GCynIvJY8wfm2qDW.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://thumbs.dreamstime.com/z/gardening-banner-illustration-word-made-green-grass-brown-earth-texture-tools-isolated-white-background-garden-179656402.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.shutterstock.com/image-photo/gardening-tools-set-flowers-sunny-260nw-1660400572.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <h2><i class="fas fa-leaf"></i> Catégories</h2>
    </div>

    <?php
    $stmt = $conn->query("SELECT * from t_d_categorie");
    while ($row = $stmt->fetch()) :
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $row['Libelle'] ?></h5>
            <a href="catalogue.php?categorie=<?= $row['Id_Categorie'] ?>" class="btn btn-primary">Voir les produits</a>
        </div>
    </div>
<?php endwhile; ?>

  </main>




  <div class="container mt-5 text-center">
    <div class="jumbotron">
      <hr class="my-4">
      <div class="text-center">
        <img src="https://c8.alamy.com/compfr/2h5e441/gros-plan-d-un-architecte-paysagiste-equestre-sur-une-tondeuse-a-gazon-design-de-banniere-espace-de-copie-2h5e441.jpg" alt="Votre image" class="img-fluid" style="max-width: 80%;">
      </div>
      <p>Profitez de nos offres exceptionnelles et de nos conseils pour créer le jardin de vos rêves.</p>
      <a class="btn btn-primary btn-sm" href="#" role="button">En savoir plus</a>
    </div>
  </div>

  <div class="container mt-5 text-center">
    <div class="jumbotron">
      <hr class="my-4">
      <div class="text-center">
        <img src="https://www.jardinpromo.com/modules/angarslider/views/img/images/3ec27177f8a714db2ccb58f73170f1ed696cb990_71a9b3cb8be95c331f52578f1685dd0cec16ad94_banniere-yardforce.jpg" alt="Votre image" class="img-fluid" style="max-width: 80%;">
      </div>
      <p>Découvrez notre marque vedette.</p>
      <a class="btn btn-primary btn-sm" href="#" role="button">En savoir plus</a>
    </div>
  </div>

  <div class="container mt-5 text-center">
    <div class="jumbotron">
      <hr class="my-4">
      <div class="text-center">
        <img src="https://s.tmimgcdn.com/scr/1200x627/282400/conception-de-banniere-publicitaire-facebook-pour-le-jardin-a-la-maison-09_282448-original.jpg" alt="Votre image" class="img-fluid" style="max-width: 80%;">
      </div>
      <p>Quoi de neuf.</p>
      <a class="btn btn-primary btn-sm" href="#" role="button">En savoir plus</a>
    </div>
  </div>

  <footer>
    <?php include('../includes/footer.php'); ?>
    <!-- Le contenu du pied de page (liens, copyright, etc.) sera chargé à partir du fichier footer.php -->
  </footer>
</body>

</html>