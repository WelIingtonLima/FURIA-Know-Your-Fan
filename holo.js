const holo = document.getElementById('holo');
const container = document.getElementById('logoArea');

let isMouseInside = false;
let animationFrame;
let rotation = 0;
let lastTimestamp = 0;

// Função para animar o gradiente girando
function animateRotation(timestamp) {
  if (!lastTimestamp) {
    lastTimestamp = timestamp;
  }
  
  // Calcular o tempo decorrido desde o último frame
  const elapsed = timestamp - lastTimestamp;
  lastTimestamp = timestamp;
  
  // Incrementar a rotação (ajustar a velocidade aqui)
  rotation = (rotation + elapsed * 0.05) % 360;
  
  // Aplicar a rotação ao gradiente com versão mais suave
  holo.style.background = `
    radial-gradient(
      circle at center,
      rgb(0, 198, 248) 0%,
      rgba(255, 255, 255, 0) 40%
    ),
    conic-gradient(
      from ${rotation}deg,
      rgba(119, 0, 255, 0.75),
      rgba(0, 255, 255, 0.75),
      rgba(0, 255, 149, 0.75),
      rgba(0, 255, 255, 0.75),
      rgba(119, 0, 255, 0.75)
    )
  `;
  
  // Se o mouse não estiver dentro do logo, continua a animação
  if (!isMouseInside) {
    animationFrame = requestAnimationFrame(animateRotation);
  }
}

// Iniciar a animação de rotação
animationFrame = requestAnimationFrame(animateRotation);

// Evento ao entrar com o mouse
container.addEventListener('mouseenter', () => {
  isMouseInside = true;
  // Cancelar a animação automática quando o mouse entra
  cancelAnimationFrame(animationFrame);
});

// Evento ao sair com o mouse
container.addEventListener('mouseleave', () => {
  isMouseInside = false;
  // Voltar ao centro e reiniciar a animação quando o mouse sai
  holo.style.backgroundPosition = '50% 50%';
  // Reiniciar a animação de rotação
  animationFrame = requestAnimationFrame(animateRotation);
});

// Evento ao mover o mouse
container.addEventListener('mousemove', (e) => {
  if (!isMouseInside) return;
  
  const rect = container.getBoundingClientRect();
  const x = ((e.clientX - rect.left) / rect.width) * 100;
  const y = ((e.clientY - rect.top) / rect.height) * 100;
  
  // Quando o mouse está dentro, o ângulo do gradiente fica relacionado à posição do mouse
  const angle = (x / 100 * 360);
  
  // Aplicar a posição e rotação baseadas na posição do mouse com versão mais suave
  holo.style.backgroundPosition = `${x}% ${y}%`;
  holo.style.background = `
    radial-gradient(
      circle at ${x}% ${y}%,
      rgb(0, 198, 248) 0%,
      rgba(255, 255, 255, 0) 40%
    ),
    conic-gradient(
      from ${angle}deg at ${x}% ${y}%,
      rgba(255, 0, 255, 0.75),
      rgba(0, 255, 255, 0.75),
      rgba(0, 255, 136, 0.75),
      rgba(0, 255, 255, 0.75),
      rgba(255, 0, 255, 0.75)
    )
  `;
});
