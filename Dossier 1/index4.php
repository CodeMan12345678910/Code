<?php
session_start();
if (!isset($_SESSION['identifiant']) || empty($_SESSION['identifiant'])) {
    $_SESSION['message'] = "Veuillez vous connecter avant de voter.";
    header("Location: index3.php");
    exit();
}

$identifiant = $_SESSION['identifiant'];


try {
    $clspit = new PDO("mysql:host=localhost;dbname=wh100255_users;charset=utf8", 'wh100255_users', 'JnBWzvKMydIy');
    $clspit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . htmlspecialchars($e->getMessage()));
}

// Vérifier si l'utilisateur a déjà voté
$sql_check_vote = "SELECT nombre_votes, candidat FROM votes WHERE identifiant = :identifiant";
$stmt_check_vote = $clspit->prepare($sql_check_vote);
$stmt_check_vote->execute([':identifiant' => $identifiant]);
$result = $stmt_check_vote->fetch(PDO::FETCH_ASSOC);

if ($result && $result['nombre_votes'] > 0) {
    $_SESSION['message'] = "Vous avez déjà voté pour " . htmlspecialchars($result['candidat']) . ". Vous ne pouvez plus voter.";
    header("Location: index3.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote - ESMA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
 
</head>
<body>

<style>

        .animated-text {
            font-size: 2rem;
            margin: 20px 0;
        }



</style>




    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>


    <!-- Contenu principal -->
    <div id="content">
        <header class="header text-center py-4">
            <img src="logo.jpg" alt="Logo-Esma" style="width: 100px;">
            <h1>Élection des Représentants Étudiants</h1>
            <p>Choisissez votre représentant</p>
        </header>

        <div class="container mt-4">
            <h2 class="text-center" id="typed-text"></h2>
            <div class="row justify-content-center">
                <form action="index-3.php" method="POST" class="d-flex flex-wrap justify-content-center">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($identifiant); ?>">
                    
                    <div class="card m-3 hidden" style="width: 18rem;" data-aos="zoom-in-down">
                        <img src="Candidat 1.jpg" class="card-img-top" alt="Candidat 3" >
                        <div class="card-body text-center">
                            <h5 class="card-title">SAFFO JEAN MARTIAL TANO </h5>
                            <p class="card-text">Communication visuelle 2</p>
                            <button  type="submit" class="btn btn-danger" name="candidat"
                                value="Candidat 1">Votez ce candidat</button>
                        </div>
                    </div>

                    
                    <div class="card m-3 hidden" style="width: 18rem;" data-aos="zoom-in-down">
                        <img src="Candidat 2.jpg" class="card-img-top" alt="Candidat 2" data-aos="fade-right">
                        <div class="card-body text-center">
                            <h5 class="card-title">KRA KONAN JOSEPH EMMANUEL</h5>
                            <p class="card-text">Journalisme plurimédia 2</p>
                            <button  type="submit" class="btn btn-danger" name="candidat"
                            value="Candidat 2">Votez ce candidat</button>
                        </div>
                    </div>
                    
                    <div class="card m-3 hidden" style="width: 18rem;" data-aos="zoom-in-down" >
                        <img src="Candidat 3.jpg" class="card-img-top" alt="Candidat 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">AMOUAN N'DORY PIERRE SAMUEL</h5>
                            <p class="card-text">Communication visuelle 1</p>
                            <button  type="submit" class="btn btn-danger" name="candidat"
                                value="Candidat 3">Votez ce candidat</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>



    <center>

<h3 id="gsap-text" class="animated-text1"><span style="color : #fb7e11;">ESMA,</span> L'école qui professionnalise votre talent</h3>

<svg id="star1" viewBox="0 0 24 24" fill="#fb7e11">
        <polygon points="12,2 15,10 24,10 17,15 19,23 12,18 5,23 7,15 0,10 9,10" />
    </svg>
    
    <svg id="star2" viewBox="0 0 24 24" fill="#fb7e11">
        <polygon points="12,2 15,10 24,10 17,15 19,23 12,18 5,23 7,15 0,10 9,10" />
    </svg>
    
    <svg id="star3" viewBox="0 0 24 24" fill="#fb7e11">
        <polygon points="12,2 15,10 24,10 17,15 19,23 12,18 5,23 7,15 0,10 9,10" />
    </svg>


</center>  




<center>
<footer> © 2025 BDE-ESMA | DEV-WEB-&-MOBILE-3 | Tous droits réservés.</footer>
</center>

 <script>
        
        window.onload = function () {
            setTimeout(function () {
                document.getElementById("preloader").style.display = "none";
                document.getElementById("content").style.display = "block";
            }, 300);
        };
        </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script src="script2.js"></script>
<script src="script4.js"></script>
</body>
</html>