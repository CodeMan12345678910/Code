<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation de Texte avec GSAP</title>
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
            font-size: 3rem;
            font-weight: bold;
            position: relative;
            text-align: center;
            opacity: 0; /* Les textes commencent invisibles */
        }
    </style>
</head>
<body>

    <div class="text-container">ESMA, VOTE !</div>
    <div class="text-container">ESMA, EST MAGNIFIQUE !</div>
    <div class="text-container">ESMA, c'est magique !</div>
    <div class="text-container">ESMA, toujours au top !</div>

    <!-- Inclusion de GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const texts = document.querySelectorAll(".text-container");

            let tl = gsap.timeline({
                onComplete: () => {
                    // Redirection après l'animation
                    window.location.href = "index2.php"; // Remplace par ton lien
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
