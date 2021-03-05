//Scripts to Anime on Scroll
  function initScrollAnime() {
    const sections = document.querySelectorAll('[data-anime="scroll"]');
    if(sections.length) {
      const wHalf = window.innerHeight * 0.8;

      function animaScroll() {
        sections.forEach((section) => {
          const sectionTop = section.getBoundingClientRect().top;
          const isSectionVisible = (sectionTop - wHalf) < 0;
          if(isSectionVisible)
            section.classList.add('ativo');
          else 
            section.classList.remove('ativo');
        })
      }

      animaScroll();

      window.addEventListener('scroll', animaScroll);
    }
  }
  initScrollAnime();
//END Scripts to Anime on Scroll