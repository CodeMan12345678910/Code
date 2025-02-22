<?php
session_start();

if (!isset($_SESSION['identifiant'])) {
    $_SESSION['message'] = "Veuillez vous connecter avant de voter.";
    header("Location: index.php");
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
    header("Location: index4.php");
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
    <link rel="stylesheet" href="style.css">
    <style>
        /* Preloader */
        #preloader {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #content {
            display: none;
        }
    </style>
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>

    <!-- Contenu principal -->
    <div id="content">
        <header class="header text-center py-4">
            <img src="téléchargement.png" alt="Logo-Esma" style="width: 100px;">
            <h1>Élection des Représentants Étudiants</h1>
            <p>Choisissez votre représentant</p>
        </header>

        <div class="container mt-4">
            <h2 class="text-center">Votez pour un Candidat</h2>
            <div class="row justify-content-center">
                <form action="index3.php" method="POST" class="d-flex flex-wrap justify-content-center">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($identifiant); ?>">

                    <div class="card m-3" style="width: 18rem;">
                        <img src="candidat1.jpg" class="card-img-top" alt="Candidat 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Candidat 1</h5>
                            <p class="card-text">2ème année</p>
                            <button type="submit" class="btn btn-danger" name="candidat"
                                value="Candidat 1">Voter</button>
                        </div>
                    </div>

                    <div class="card m-3" style="width: 18rem;">
                        <img src="candidat2.jpg" class="card-img-top" alt="Candidat 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Candidat 2</h5>
                            <p class="card-text">3ème année</p>
                            <button type="submit" class="btn btn-danger" name="candidat"
                                value="Candidat 2">Voter</button>
                        </div>
                    </div>

                    <div class="card m-3" style="width: 18rem;">
                        <img src="candidat3.jpg" class="card-img-top" alt="Candidat 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Candidat 3</h5>
                            <p class="card-text">1ère année</p>
                            <button type="submit" class="btn btn-danger" name="candidat"
                                value="Candidat 3">Voter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            setTimeout(function () {
                document.getElementById("preloader").style.display = "none";
                document.getElementById("content").style.display = "block";
            }, 3000);
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>