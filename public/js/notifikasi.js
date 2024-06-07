function showCutscene(cutsceneId) {
  typing(cutsceneId);
  document.getElementById(cutsceneId).style.display = 'flex';
}

function showNextCutscene(nextCutsceneId) {
  const currentCutscene = document.querySelector('.cutscene-overlay[style*="display: flex"]');
  if (currentCutscene) {
    currentCutscene.style.display = 'none';
  }
  const nextCutscene = 'cutscene' + nextCutsceneId;
  typing(nextCutscene);
  document.getElementById(nextCutscene).style.display = 'flex';
}

function hideCutscene() {
  const currentCutscene = document.querySelector('.cutscene-overlay[style*="display: flex"]');
  if (currentCutscene) {
    currentCutscene.style.display = 'none';
  }
}

// Start the first cutscene on page load
document.addEventListener('DOMContentLoaded', function() {
  showCutscene('cutscene1');
});

// Typing animation
function typeWriter(element, text, speed, index = 0) {
  if (index < text.length) {
    element.innerHTML += text.charAt(index);
    setTimeout(() => typeWriter(element, text, speed, index + 1), speed);
  }
}

function typing(cutsceneId) {
  const typingElements = document.querySelectorAll(`#${cutsceneId} .typing-text`);
  typingElements.forEach(element => {
    element.innerHTML = ''; // Clear the text first
    const text = element.getAttribute('data-text');
    const speed = 20; // Adjust the speed as necessary
    typeWriter(element, text, speed);
  });
}