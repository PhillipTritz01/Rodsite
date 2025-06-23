// Main services section (original)
const media      = document.getElementById('service-media');
const serviceEls = document.querySelectorAll('.service-card');

const io = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      media.src = e.target.dataset.media;                 // swap big image
      media.classList.replace('clip-start', 'clip-reveal');
      e.target.classList.add('in-view');                  // fade-in card
      io.unobserve(e.target);                             // fire once
    }
  });
}, { threshold: 0.35 });

serviceEls.forEach(el => io.observe(el));

// Individual service sections with circle wipe reveal
const createServiceObserver = (cardSelector, mediaId, isLeftSide = false) => {
  const mediaElement = document.getElementById(mediaId);
  const cardElements = document.querySelectorAll(cardSelector);
  
  if (!mediaElement || cardElements.length === 0) return;
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const targetMedia = e.target.dataset.target;
        if (targetMedia === mediaId) {
          mediaElement.src = e.target.dataset.media;
          
          // Use appropriate animation based on side
          if (isLeftSide) {
            mediaElement.classList.replace('clip-start-left', 'clip-reveal-left');
          } else {
            mediaElement.classList.replace('clip-start', 'clip-reveal');
          }
          
          e.target.classList.add('in-view');
          observer.unobserve(e.target);
        }
      }
    });
  }, { threshold: 0.35 });
  
  cardElements.forEach(el => observer.observe(el));
};

// Initialize observers for each individual service section
createServiceObserver('.photography-card', 'photography-media', true);  // Left side
createServiceObserver('.design-card', 'design-media', false);           // Right side  
createServiceObserver('.other-card', 'other-media', true);              // Left side 