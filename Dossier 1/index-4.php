<?php
try {
    $clspit = new PDO("mysql:host=localhost;dbname=wh100255_users;charset=utf8", 'wh100255_users', 'JnBWzvKMydIy');
    $clspit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . htmlspecialchars($e->getMessage()));
}

// Récupérer le total des votes
$sql_total_votes = "SELECT COUNT(*) as total FROM votes";
$stmt_total = $clspit->query($sql_total_votes);
$total_votes = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];

// Récupérer les votes par candidat
$sql_votes = "SELECT candidat, COUNT(*) as nombre FROM votes GROUP BY candidat";
$stmt_votes = $clspit->query($sql_votes);
$votes = $stmt_votes->fetchAll(PDO::FETCH_ASSOC);

// Initialiser les variables pour chaque candidat
$candidat_votes = [
    "Candidat 1" => [
        'votes' => 0,
        'pourcentage' => 0,
        'photo' => 'Candidat 1.jpg',
        'details' => "AMOUAN N'DORY PIERRE SAMUEL"
    ],
    'Candidat 2' => [
        'votes' => 0,
        'pourcentage' => 0,
        'photo' => 'Candidat 2.jpg',
        'details' => 'KRA KONAN JOSEPH EMMANUEL'
    ],
    'Candidat 3' => [
        'votes' => 0,
        'pourcentage' => 0,
        'photo' => 'Candidat 3.jpg',
        'details' => 'SAFFO JEAN MARTIAL TANO'
    ]
];

// Calculer les votes et les pourcentages pour chaque candidat
foreach ($votes as $vote) {
    if (isset($candidat_votes[$vote['candidat']])) {
        $candidat_votes[$vote['candidat']]['votes'] = $vote['nombre'];
        $candidat_votes[$vote['candidat']]['pourcentage'] = ($total_votes > 0) ? round(($vote['nombre'] / $total_votes) * 100, 2) : 0;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats des Votes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>


khbdshvqhsbjsbvhbvhsqbhvb
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>



  <header class="header">
        <div class="logo">
            <img src="logo.jpg" alt="Logo-Esma" style="width: 100px;">
       </div>
       <center>
        <h2 class="text-center">Résultats des votes</h2>
        <p class="text-center">Nombre total de votes : <strong><?php echo $total_votes; ?></strong></p>
       </center>
    </header>





    <div class="container mt-5">
       

        <!-- Affichage des résultats pour chaque candidat -->
        <?php foreach ($candidat_votes as $nom => $data): ?>
            <div class="candidate-card" style="margin: 15px; border: 1px solid #ddd; padding: 15px;">

                <img src="<?php echo $data['photo']; ?>" alt="<?php echo $nom; ?>" class="candidate-photo"
                    style="width: 150px; height: 150px; object-fit: cover;">

                <div class="candidate-info" style="display: inline-block; margin-left: 20px;">

                    <h3 class="candidate-name"><?php echo $nom; ?></h3>

                    <p class="candidate-details"><?php echo $data['details']; ?></p>

                    <p><strong>Votes : <?php echo $data['votes']; ?> (<?php echo $data['pourcentage']; ?>%)</strong></p>
                    
                    <div class="progress">

                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: <?php echo $data['pourcentage']; ?>%;"
                            aria-valuenow="<?php echo $data['pourcentage']; ?>" aria-valuemin="0" aria-valuemax="100">

                            <?php echo $data['pourcentage']; ?>%
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


<center>
<footer> © 2025 - BDE ESMA | Tous droits réservés .</footer>
</center>


<script>

    window.onload = function () {
     setTimeout(function () {
         document.getElementById("preloader").style.display = "none";
     }, 3000);
 };
 
 setTimeout(function () {
     window.location.href = "index3.php"; // Remplace par ta page de destination
 }, 100000);

</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>