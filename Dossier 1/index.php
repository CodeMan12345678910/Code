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
        <header class="header py-4">
            <img src="logo.jpg" alt="Logo-Esma" style="width: 100px;">
            <h1 style="text-align: center;">Bienvenue sur la plateforme officielle de vote des étudiants </h1>
      
        </header>

  <!-- Contenu principal -->
  <div id="content">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="animated-text display-4 fw-bold lh-1 text-body-emphasis mb-3">
            Connectez-vous pour voter
          </h1>
          <p class="col-lg-10 fs-4">
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
              <label for="id">Entrez votre matricule</label>
            </div>
            <div class="checkbox mb-3">
           
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Validez</button>
            <hr class="my-4">
            <small class="text-body-secondary">Contactez l'administration en cas de problème de connexion</small>
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