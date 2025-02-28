 // GSAP Animation pour le texte
 gsap.to("#gsap-text", {
    opacity: 1,
    y: -20,
    duration: 2,
    ease: "power2.out"
});

// GSAP Animation pour faire disparaître et réapparaître les étoiles
gsap.to("#star1", {
    opacity: 0,
    duration: 2,
    repeat: -1,  // Répéter l'animation infiniment
    yoyo: true,  // Permet aux étoiles de réapparaître après avoir disparu
    ease: "power2.inOut",
    delay: 1  // Délai avant que l'animation commence
});

gsap.to("#star2", {
    opacity: 0,
    duration: 2,
    repeat: -1,
    yoyo: true,
    ease: "power2.inOut",
    delay: 1.5
});

gsap.to("#star3", {
    opacity: 0,
    duration: 2,
    repeat: -1,
    yoyo: true,
    ease: "power2.inOut",
    delay: 2
});