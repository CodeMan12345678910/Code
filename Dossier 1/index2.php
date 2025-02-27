<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index2.css">
    <title>Page avec Vidéo et Description</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class=" col-sm-12 col-md-12 col-lg-6 " >
            <h2>Vidéo</h2>
            <!-- Remplace l'URL de la vidéo par celle que tu souhaites afficher -->
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class=" col-sm-12 col-md-12 col-lg-6 ">
            <h2>Description</h2>
            <p>Voici une description qui accompagne la vidéo. Vous pouvez y mettre toutes les informations que vous souhaitez partager avec vos utilisateurs.</p>
            <button class="btn-primary" onclick="location.href='index3.php' ">Cliquez ici</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
