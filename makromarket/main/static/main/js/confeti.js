// Создание конфеты
function createConfetti() {
  const colors = ['#ff4242', '#ff6b6b', '#ffa8a8', '#ffbf3d', '#ffd23f', '#ffe11a', '#79ff38', '#10ff00', '#3fffd8', '#20b2aa'];
  const confetti = document.createElement('div');
  confetti.className = 'confetti';
  confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
  confetti.style.left = Math.random() * 100 + 'vw';
  document.body.appendChild(confetti);
  
  // Удаление конфеты после анимации
  setTimeout(function() {
    confetti.remove();
  }, 2000);
  
  return confetti;
}

// Анимированное движение конфеты
function animateConfetti(confetti) {
  let progress = 0;
  const start = performance.now();

  function step(timestamp) {
    let time = timestamp - start;
    confetti.style.transform = 'translateY(' + time * 0.1 + 'px)';
    
    if (time < 2000) {
      requestAnimationFrame(step);
    }
  }

  requestAnimationFrame(step);
}

// Создание нескольких конфет на странице
for (let i = 0; i < 150; i++) {
  setTimeout(function() {
    const confetti = createConfetti();
    animateConfetti(confetti);
  }, i * 200);
}