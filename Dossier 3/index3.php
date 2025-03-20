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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="shortcut icon" type="x-icon" href="logo.jpg">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="style.css">



<script>
  document.addEventListener("contextmenu", function (event) {
      event.preventDefault();
  });
  
  document.addEventListener("keydown", function (event) {
      if (event.ctrlKey && (event.key === 'u' || event.key === 'U' || event.shiftKey && event.key === 'I')) {
          event.preventDefault();
      }
  });


</script>


</head>
<style>

</style>

<body> 



  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Chargement...</span>
    </div>
  </div>




    <!-- Contenu principal -->
    <!--<div id="content-1">-->
        <header class="header py-4">
            <img src="logo.jpg" alt="Logo-Esma" style="width: 100px;">
            <h3 style="text-align: center;" id="gsap-text" class="animated-text">Bienvenue sur 
              la plateforme officielle de vote des étudiants </h3>
            
        </header>
 
  <!-- Contenu principal -->
  <section >
    <div class="container">
      <div class="row">
        <div class="col-lg-5 text-center text-lg-start">
  <center>
    

<h3 style="font-size: 30px;color:#000; text-align:center;">Processus de vote</h3>
<div class="card" style="width: 18rem; height: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">1. Le candidat saisit son matricule pour s'identifier
<strong style="color: #fb7e11;">par exemple : ( 25SMR-1034)</strong></li>
    <li class="list-group-item">2. Son mot de passe est composé de 
son nom et sa date de naissance   
<strong style="color: #fb7e11;">par exemple : (KONE25/12/2003)</strong></li>
    <li class="list-group-item">3. Cliquer sur le bouton de validation <strong style="color: #fb7e11;">"Validez"</strong></li>
  </ul>
</div>
</center>
    </div>
  
        <div class="col-lg-7 mt-3">
        <h2 style="color:#000; text-align:center;";>  Connectez-vous pour voter</h2> 
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

     <div class="checkbox mb-3"></div>
 <!-- Password -->
     <div class="input-group mb-3">
  <div class="form-floating">
    <input type="password" class="form-control" id="MDP" name="MDP" placeholder="Entrez votre mot de passe" required>
    <label for="MDP">Entrez votre mot de passe</label>
  </div>
  <button type="button" id="togglePassword" class="btn btn-outline-secondary">
    <i class="bi bi-eye"></i> 
  </button>
</div>

            <div class="checkbox mb-3">
           
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Validez</button>
            <div class="checkbox mb-3"></div>
  <hr class="my-4">

  <h6>Bienvenue ! Suivez facilement les statistiques de vote en temps réel.</h6>
    <button class="w-100 btn btn-lg btn-primary" type="submit"><a href="index5.php">Voir les statistiques</a></button>

            <hr class="my-4">
            <small class="text-body-secondary">Contactez l'administration en cas de problème de connexion</small>
          </form>
        </div>
      </div>
    </div>
  </section>
  

    

  
  
  <script>
    // Attendre 3 secondes avant d'afficher le contenu
    window.onload = function () {
      setTimeout(function () {
        document.getElementById("preloader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }, 300);
    };
  </script>


<center>

  <h3 id="gsap-text" class="animated-text1" style="color : #000;"><span style="color : #fb7e11;">ESMA,</span> L'école qui professionnalise votre talent</h3>
  
  <svg id="star1" viewBox="0 0 24 24" fill="#000">
          <polygon points="12,2 15,10 24,10 17,15 19,23 12,18 5,23 7,15 0,10 9,10" />
      </svg>
      
      <svg id="star2" viewBox="0 0 24 24" fill="#000">
          <polygon points="12,2 15,10 24,10 17,15 19,23 12,18 5,23 7,15 0,10 9,10" />
      </svg>
      
      <svg id="star3" viewBox="0 0 24 24" fill="#000">
          <polygon points="12,2 15,10 24,10 17,15 19,23 12,18 5,23 7,15 0,10 9,10" />
      </svg>


</center>  





<center>
  <footer style="color:#000;""> © 2025 BDE-ESMA | DEV-WEB-&-MOBILE-3 | Tous droits réservés.</footer>
</center>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="scriptdef.js"></script>
<script src="script4.js"></script>
<script src="script6.js"></script>
</body>
</html>