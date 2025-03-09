<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://projet3.bonovapro.com/loaderio-d1e4777e58acc975f9735df06ba8004f.html">
    <title>ESMA | VOTE</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fb7e11;
            color: white;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .text-container {
            font-size: 50px;
            font-weight: bold;
            position: relative;
            text-align: center;
            opacity: 0; /* Les textes commencent invisibles */
        }
    </style>
</head>
<body>

    <div class="text-container">ESMA, VOTE !</div>
    <div class="text-container">Ton vote, ta voix</div>
    <div class="text-container">Chaque voix compte, y comprend la tienne </div>
    <div class="text-container">L'élection, c'est le pouvoir entre tes mains</div>

    <!-- Inclusion de GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const texts = document.querySelectorAll(".text-container");

            let tl = gsap.timeline({
                onComplete: () => {
                    // Redirection après l'animation
                    window.location.href = "index3.php"; // Remplace par ton lien
                }
            });

            texts.forEach((text, index) => {
                tl.fromTo(text, 
                    { x: index % 2 === 0 ? -300 : 300, opacity: 0, rotation: -20 },
                    { x: 0, opacity: 1, rotation: 0, duration: 1, ease: "power3.out" },
                    "+=0.5" // Petit délai entre chaque texte
                );
            });
        });
    </script>
</body>
</html>
