function initCarousel(){
    var count        = 0;
    var translateX   = 0;
  
    const carouselGrid    = document.querySelector('.carousel-grid');
    const carouselWrapper = document.querySelector('.carousel-wrapper');
  
    const carouselScroll = carouselGrid.scrollWidth;
    const wrapperWidth   = carouselWrapper.clientWidth;
    const carouselItem   = document.querySelector('.carousel-item').offsetWidth;
    const dataSize       = carouselGrid.getAttribute('data-size');
    const dataShow       = wrapperWidth / carouselItem;
    const datacarousels  = Math.round(dataSize - dataShow);
  
    const btnPrev    = document.getElementById('btn-prev');
    const btnNext    = document.getElementById('btn-next');
  
    carouselGrid.style.transform = `translate3d(${translateX}px, 0, 0)`;
    
    if(typeof btnNext != "undefined" && btnNext != null){
      btnNext.addEventListener('click', (e) => {
        e.preventDefault();
        if(count < datacarousels){
          count++;
          translateX = translateX - carouselItem;
          carouselGrid.style.transform = `translate3d(${translateX}px, 0, 0)`;
        }
      })
    }
  
    if(typeof btnPrev != "undefined" && btnPrev != null){
      btnPrev.addEventListener('click', (e) => {
        e.preventDefault();
        if(count > 0){
          count--;
          translateX = translateX + carouselItem;
          carouselGrid.style.transform = `translate3d(${translateX}px, 0, 0)`;
        }
      })
    }
  }
  
  window.onload = function () {
    initCarousel();
  }
  window.onresize = function () {
    initCarousel();
  }