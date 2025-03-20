function launchConfetti() {
    confetti({
        particleCount: 100,
        spread: 120,
        startVelocity: 40,
        origin: { y: 0.6 }
    });

    setTimeout(() => {
        confetti({
            particleCount: 50,
            angle: 60,
            spread: 100,
            origin: { x: 0 }
        });
        confetti({
            particleCount: 50,
            angle: 120,
            spread: 100,
            origin: { x: 1 }
        });
    }, 500);
}

// Lance l'animation après 10 secondes
window.addEventListener('load', function () {
    setTimeout(launchConfetti, 5000); // 10000 ms = 10 secondes
});
