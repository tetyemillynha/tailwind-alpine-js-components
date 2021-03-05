//Scripts show div on scroll - JS
function initScrollAnimation() {
  const sections = document.querySelectorAll('[data-anime="scroll"]');
  if(sections.length) {
      const halfWindow = window.innerHeight * 0.9;

      function scrollingAnime() {
          sections.forEach((section) => {
              const sectionTop = section.getBoundingClientRect().top;
              const isSectionVisible = (sectionTop - halfWindow) < 0;
              const animeDirection = section.dataset.direction ? section.dataset.direction : 'show-right';

              if(isSectionVisible){
                  section.classList.add('ativo', animeDirection);
              }
          });
      }
      scrollingAnime();
      window.addEventListener('scroll', scrollingAnime, {passive: true});
  }
}
initScrollAnimation();
//END Scripts show on scroll - JS
  