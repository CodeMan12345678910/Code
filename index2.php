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
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote - ESMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <header class="header">
        <div class="logo">
            <img src="téléchargement.png" alt="Logo-Esma" style="width: 100px;">
       </div>
       <center>

           <h1>Élection des Représentants Étudiants</h1>
           <p>Choisissez votre représentant</p>
       </center>
    </header>


<div class="container">
    <h2>Votez pour un Candidat</h2>

    
    <div class="candidates-grid">
        <form action="index3.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($identifiant); ?>">
            
            
                
    <div class="candidate-card" style="margin: 15px;">
                    <img src="candidat1.jpg" alt="Candidat 1" class="candidate-photo">
                    <div class="candidate-info">
                        <h3 class="candidate-name">Candidat 1</h3>
            <p class="candidate-details">2ème année</p>
            <button type="submit" class="vote-button" name="candidat" value="Candidat 1">Voter pour ce candidat</button>
        </div>
    </div>
    
    
    <div class="candidate-card" style="margin: 15px;">
        <img src="candidat2.jpg" alt="Candidat 2" class="candidate-photo">
        <div class="candidate-info">
            <h3 class="candidate-name">Candidat 2</h3>
            <p class="candidate-details">3ème année</p>
            <button type="submit" class="vote-button" name="candidat" value="Candidat 2">Voter pour ce candidat</button>
        </div>
    </div>
    

    
    <div class="candidate-card" style="margin: 15px;">
        <img src="candidat3.jpg" alt="Candidat 3" class="candidate-photo">
        <div class="candidate-info">
            <h3 class="candidate-name">Candidat 3</h3>
            <p class="candidate-details">1ère année</p>
            <button type="submit" class="vote-button" name="candidat" value="Candidat 3">Voter pour ce candidat</button>
        </div>
    </div>
    
    </form>
</div>



</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
