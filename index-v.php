<?php
session_start();

// Régénérer l'ID de session pour plus de sécurité
session_regenerate_id(true);

try {
    // Connexion à la base de données
    $clspit = new PDO("mysql:host=localhost;dbname=wh100255_users;charset=utf8", 'wh100255_users', 'JnBWzvKMydIy');
    $clspit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . htmlspecialchars($e->getMessage()));
}

// Vérifier si un matricule a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $identifiant = htmlspecialchars(trim($_POST['id']));

    // Vérifier si l'identifiant existe dans la base de données
    $sql_check_identifiant = "SELECT * FROM votes WHERE identifiant = :identifiant";
    $stmt_check_identifiant = $clspit->prepare($sql_check_identifiant);
    $stmt_check_identifiant->execute([':identifiant' => $identifiant]);
    $user = $stmt_check_identifiant->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $_SESSION['message'] = "Identifiant incorrect. Veuillez réessayer.";
        header("Location: index.php");
        exit();
    } else {
        // Stocker l'identifiant en session
        $_SESSION['identifiant'] = $identifiant;
        header("Location: index2.php");
        exit();
    }
}
?>
