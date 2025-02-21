document.addEventListener('DOMContentLoaded', () => {
  const voteButtons = document.querySelectorAll('.vote-button');
  const progressContainers = document.querySelectorAll('.progress-container');
  const progressBars = document.querySelectorAll('.progress');
  const thankYou = document.querySelector('.thank-you');

  voteButtons.forEach((button, index) => {
      button.addEventListener('click', () => {
          // Désactiver tous les boutons
          voteButtons.forEach(btn => {
              btn.disabled = true;
              btn.style.display = 'none';
          });

          // Afficher toutes les barres de progression
          progressContainers.forEach(container => {
              container.style.display = 'block';
          });

          // Simuler des résultats aléatoires
          progressBars.forEach(bar => {
              const randomWidth = Math.floor(Math.random() * 100);
              bar.style.width = randomWidth + '%';
          });

          // Afficher le message de remerciement
          thankYou.style.display = 'block';
      });
  });
});