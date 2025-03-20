
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESMA | VOTE</title>
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


<body> 



  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Chargement...</span>
    </div>
  </div>

        <header class="header py-4">
            <img src="logo.jpg" alt="Logo-Esma" style="width: 100px;">
<center>
  <h3 id="gsap-text" class="animated-text">Le site est temporairement fermé </h3>
</center>
            
        </header>


     <div class="container mt-5">

    <div class="row align-items-md-stretch">
      <div class="col-sm-12 mt-5 g-3">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Première information</h2>
          <p>Bonjour tous les étudiants de ESMA, pour des raisons de sécurité et pour éviter la tricherie, le site sera fermé jusqu'à demain 10h.</p>

        </div>
      </div>
      <div class="col-sm-12 mt-5 g-3">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2>Deuxième information</h2>
          <p> Il est important de rappeler que seuls les étudiants de ESMA, ESCA, ISAA RIVIERA seront admissibles au vote.</p>
        </div>
      </div>
    </div>

            <center>
              <h3 style="font-size:30px; color: #000; margin-top: 15px;">Bonne chance à tous les candidats !</h3>
            </center>
     
            <center> 
              Vote prévu dans
                <h2 id="countdown" class="fw-bold text-danger" style="font-size:30px margin-top: 15px;"></h2>
            </center>
        </div>
    </div>





<div class="container mt-5">
  <center>
<h3 style="font-size: 30px;color:#000;">Processus de vote</h3>
<div class="card" style="width: 20rem; height: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="font-size:18px;">1. Le candidat saisit son matricule pour s'identifier
<strong style="color: #fb7e11;">par exemple : ( 25SMR-1034)</strong></li>
    <li class="list-group-item" style="font-size:18px;">2. Son mot de passe est composé de 
son nom et sa date de naissance   
<strong style="color: #fb7e11;">par exemple : (KONE25/12/2003)</strong></li>
    <li class="list-group-item" style="font-size:18px;">3. Cliquer sur le bouton de validation <strong style="color: #fb7e11;">"Validez"</strong></li>
  </ul>
</div>
</center>

</div>



<center>
  <h3 style="font-size: 30px;color:#000; margin-top: 20px;">Présentation des candidats</h3>
</center>

        <div class="container mt-4">
            <h2 class="text-center" id="typed-text"></h2>
            <div class="row justify-content-center">
                <form  class="d-flex flex-wrap justify-content-center">
                 
              <div class="card m-3" style="width: 18rem;">
                <img src="Candidat 1.jpg" class="card-img-top" alt="Candidat 3">
                <div class="card-body text-center">
                  <h5 class="card-title">SAFFO JEAN MARTIAL TANO </h5>
                  <p class="card-text">Communication visuelle 2</p>
                  
                </div>
              </div>
        
        
              <div class="card m-3" style="width: 18rem;">
                <img src="Candidat 2.jpg" class="card-img-top" alt="Candidat 2" data-aos="fade-right">
                <div class="card-body text-center">
                  <h5 class="card-title">KRA KONAN JOSEPH EMMANUEL</h5>
                  <p class="card-text">Journalisme plurimédia 2</p>
                  
                </div>
              </div>
        
              <div class="card m-3" style="width: 18rem;">
                <img src="Candidat 3.jpg" class="card-img-top" alt="Candidat 1">
                <div class="card-body text-center">
                  <h5 class="card-title">AMOUAN N'DORY PIERRE SAMUEL</h5>
                  <p class="card-text">Communication visuelle 1</p>
                  
                </div>
              </div>
        
            </form>
          </div>
        </div>



 
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
<script src="script.js"></script>
<script src="script4.js"></script>
</body>
</html>