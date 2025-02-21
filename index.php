<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Vote</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <h2>Connexion</h2>

    <?php
    if (isset($_SESSION['message'])) {
        echo '<div class="message ' . (strpos($_SESSION['message'], 'Merci') !== false ? 'success' : 'error') . '">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
    }
    ?>

    <form action="index-v.php" method="post">
        <label for="id">Votre Identifiant (ex: ESMA-123):</label>
        <input type="text" id="id" name="id" required>
        <button type="submit">Se connecter</button>
    </form>
</div>

</body>
</html>
