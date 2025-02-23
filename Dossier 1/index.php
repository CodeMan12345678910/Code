<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Vote</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-border text-danger" role="status">
      <span class="visually-hidden">Chargement...</span>
    </div>
  </div>




    <!-- Contenu principal -->
    <div id="content-1">
        <header class="header  py-4">
            <img src="téléchargement.png" alt="Logo-Esma" style="width: 100px;">
            <h1>Bienvenue sur le site officiel de vote</h1>
            <p>Choisissez votre représentant</p>
        </header>

        <center>
          <h1 class="mt-3">Photo des candidats</h1>
        </center>

        <div id="carouselExampleControlsNoTouching" class="carousel slide mt-5" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="téléchargement.png" class="d-block w-75" alt="Photo-candidat1-esma" height="500px">
    </div>
    <div class="carousel-item">
      <img src="téléchargement.png" class="d-block w-75" alt="Photo-candidat2-esma" height="500px">
    </div>
    <div class="carousel-item">
      <img src="téléchargement.png" class="d-block w-75" alt="Photo-candidat3-esma" height="500px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédant</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>




  <!-- Contenu principal -->
  <div id="content">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="animated-text display-4 fw-bold lh-1 text-body-emphasis mb-3">
            Vertically centered hero sign-up form
          </h1>
          <p class="col-lg-10 fs-4">
            Below is an example form built entirely with Bootstrap’s form controls...
          </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
        <?php
if (isset($_SESSION['message'])) {
  $isSuccess = strpos($_SESSION['message'], 'Merci') !== false; // Vérifie si "Merci" est dans le message
  echo '<div class="message ' . ($isSuccess ? 'success' : 'error') . '">' . $_SESSION['message'] . '</div>';
  unset($_SESSION['message']);
}
?>

          <form action="index-v.php" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="id" name="id" placeholder="Entrer votre matricule" required>
              <label for="id">Entrer votre matricule</label>
            </div>
            <div class="checkbox mb-3">
           
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Valider</button>
            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  

  
  
  <script>
    // Attendre 3 secondes avant d'afficher le contenu
    window.onload = function () {
      setTimeout(function () {
        document.getElementById("preloader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }, 3000);
    };
  </script>


<center>
  <footer> © 2025 - BDE ESMA | Tous droits réservés .</footer>
</center>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>