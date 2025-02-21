<?php
session_start();

if (!isset($_SESSION['identifiant'])) {
    $_SESSION['message'] = "Veuillez vous connecter avant de voter.";
    header("Location: index.php");
    exit();
}

$identifiant = $_SESSION['identifiant'];

try {
    // Connexion à la base de données
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
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESMA - Système de Vote</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo">ESMA</div>
        <h1>Élection des Représentants Étudiants</h1>
        <p>Choisissez votre représentant</p>
    </header>

    <div class="container">
        <div class="candidates-grid">
            <div class="candidate-card">
                <img src="/api/placeholder/300/300" alt="Candidat 1" class="candidate-photo">
                <div class="candidate-info">
                    <h3 class="candidate-name">Candidat 1</h3>
                    <p class="candidate-details">2ème année</p>
                    <button class="vote-button" value="Candidat 1" >Voter pour ce candidat</button>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="candidate-card">
                <img src="/api/placeholder/300/300" alt="Candidat 2" class="candidate-photo">
                <div class="candidate-info">
                    <h3 class="candidate-name">Candidat 2</h3>
                    <p class="candidate-details">3ème année</p>
                    <button class="vote-button" value="Candidat 2">Voter pour ce candidat</button>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="candidate-card">
                <img src="/api/placeholder/300/300" alt="Candidat 3" class="candidate-photo">
                <div class="candidate-info">
                    <h3 class="candidate-name">Candidat 3</h3>
                    <p class="candidate-details">1ère année</p>
                    <button class="vote-button" value="Candidat 3">Voter pour ce candidat</button>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thank-you">
            Merci d'avoir participé à l'élection des représentants ESMA !
        </div>

        <div class="school-info">
            <p>ESMA - École Specialite de Multi-Media </p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>