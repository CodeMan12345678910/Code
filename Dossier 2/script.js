function startCountdown() {
  const now = new Date();
  const targetTime = new Date();
  targetTime.setHours(10, 20, 0, 0); // 10h00:00 locale

  // Si l'heure actuelle est déjà passée 10h, définir le lendemain
  if (targetTime <= now) {
    targetTime.setDate(targetTime.getDate() + 1);
  }

  function updateCountdown() {
    const now = new Date();
    const diff = targetTime - now;

    if (diff <= 0) {
      clearInterval(interval);
      document.getElementById('countdown').innerText = '00h 00m 00s';
      return;
    }

    const hours = Math.floor((diff / (1000 * 60 * 60)));
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    document.getElementById('countdown').innerText = `${hours}h ${minutes}m ${seconds}s`;
  }

  updateCountdown();
  const interval = setInterval(updateCountdown, 1000);
}

startCountdown();
