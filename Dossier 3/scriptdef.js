document.addEventListener("DOMContentLoaded", () => {
    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    });
    
    document.querySelectorAll('.hidden').forEach(el => observer.observe(el));
    
    // Typed.js Animation
    new Typed("#typed-text", {
        strings: ["Chaque vote compte. Faites entendre votre voix et participez activement à l’avenir de votre établissement."],
        typeSpeed: 150,
        backSpeed: 25,
        loop: true
    });
    
    // GSAP Animations
    gsap.to("#gsap-text", { opacity: 1, y: -20, duration: 2, ease: "power2.out" });
    
    ["#star1", "#star2", "#star3"].forEach((star, index) => {
        gsap.to(star, {
            opacity: 0,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: "power2.inOut",
            delay: 1 + (index * 0.5)
        });
    });
    
    

});
