<?php
session_start();

if (!isset($_SESSION['identifiant'])) {
    $_SESSION['message'] = "Veuillez vous connecter avant de voter.";
    header("Location: index.php");
    exit();
}

try {
    $clspit = new PDO("mysql:host=localhost;dbname=wh100255_users;charset=utf8", 'wh100255_users', 'JnBWzvKMydIy');
    $clspit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . htmlspecialchars($e->getMessage()));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['candidat'])) {
    $identifiant = $_SESSION['identifiant'];
    $candidat = htmlspecialchars(trim($_POST['candidat']));

    $sql_check_vote = "SELECT nombre_votes FROM votes WHERE identifiant = :identifiant";
    $stmt_check_vote = $clspit->prepare($sql_check_vote);
    $stmt_check_vote->execute([':identifiant' => $identifiant]);
    $result = $stmt_check_vote->fetch(PDO::FETCH_ASSOC);

    if ($result && $result['nombre_votes'] > 0) {
        $_SESSION['message'] = "Vous avez déjà voté.";
        header("Location: index4.php");
        exit();
    }

    $sql_vote = "UPDATE votes SET nombre_votes = 1, candidat = :candidat WHERE identifiant = :identifiant";
    $stmt_vote = $clspit->prepare($sql_vote);
    $stmt_vote->execute([':identifiant' => $identifiant, ':candidat' => $candidat]);

    $_SESSION['message'] = "Votre vote pour $candidat a été enregistré.";
    header("Location: index-4.php");
    exit();
}
?>
