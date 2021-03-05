//Scripts to Dropdown Menu
function initDropdownMenu() {
    const dropdownItems = document.querySelectorAll('.dropdown');
    dropdownItems.forEach(menu => {
      ['touchstart', 'click'].forEach(userEvent => {
        menu.addEventListener(userEvent, handleClick);
      });
      menu.onmouseout = function(){
        this.classList.remove('active');
      }
    });

    function handleClick(event) {
      event.preventDefault();
      this.classList.add('active');
    };
  }
  initDropdownMenu();
//END Scripts to Dropdown Menu

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

//Scripts to Tabs
  function getSiblings(elem){
    var siblings = [];
    var sibling = elem.parentNode.firstChild;
    
    while (sibling) {
      if (sibling.nodeType === 1 && sibling !== elem) {
        siblings.push(sibling);
      }
      sibling = sibling.nextSibling;
    }
    return siblings;
  }

  function initTabNav() {
    const tabList = document.querySelectorAll('[data-tab="tablist"] li a');
    const tabContent = document.querySelectorAll('[data-tab="content"] .tab-pane');

    if(tabList.length && tabContent.length) {
      function activeTab(id) {
        var elem = document.querySelector(id);
        var siblings = getSiblings(elem);

        siblings.forEach((section) => {
          section.classList.remove('active');
        });

        const direction = elem.dataset.anime;
        elem.classList.add('active', direction);
      }
      //get current clicked item and active tab by id
      tabList.forEach((navLink) => {
        navLink.addEventListener('click', (e) => {
          e.preventDefault();
          let navList = "#" + document.getElementById(navLink.id).parentElement.parentElement.id + ' li a';
          var navListLinks = document.querySelectorAll(navList);
          
          navListLinks.forEach((links) => {
            links.classList.remove('active');
          });
          navLink.classList.add('active');

          let id = navLink.getAttribute("href");
          activeTab(id);
        });
      });
    }
  }
  initTabNav();
//END Scripts to Tabs


// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// var currentSlide = function(n) {
//   showSlides(slideIndex = n);
// }

// function initCarousel(){
//   const btnItem = document.querySelectorAll('.img-thumb')
//   if (btnItem.length) {
//     btnItem.forEach((item) => {
//       item.addEventListener('click', function(e) {
//         let to = item.dataset.to;
//         showSlides(slideIndex = to);
//       });
//     });
//   }
// }
// initCarousel();

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("carousel-item");
//   var dots = document.getElementsByClassName("demo");
  
//   if (n > slides.length) {slideIndex = 1;}
//   if (n < 1) {slideIndex = slides.length;}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }


//Menu toggle Mobile
function initToggleNavbar(){
  const btnToggle = document.querySelectorAll('.btn-toggle-navbar')

  if(btnToggle){
    btnToggle.forEach(btn => {
      btn.addEventListener('click', (e) =>{
        let navbarToggle   = document.getElementById(btn.dataset.target)
        let navbarExpanded = btn.dataset.expanded;
        
        if (navbarExpanded == 'true') {
          navbarToggle.classList.remove('lg:block','md:block','sm:block','block'); 
          navbarToggle.classList.add('lg:hidden','md:hidden','sm:hidden','hidden');

          btn.dataset.expanded = false;
        }else{
          navbarToggle.classList.remove('lg:hidden','md:hidden','sm:hidden','hidden');
          navbarToggle.classList.add('lg:block','md:block','sm:block','block');

          btn.dataset.expanded = true;
        }
      });
    });
  }
}
initToggleNavbar(); 



function initCarousel(){
  var count        = 0;
  var translateX   = 0;
  var lastId       = "";

  const btnCarousel  = document.querySelectorAll('button[data-carousel]');

  if(btnCarousel.length) {
    btnCarousel.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        
        const carouselId      = btn.dataset.carousel;
        const direction       = btn.dataset.slide;

        const slideTo         = btn.dataset.slideTo;
        const slidePosition   = btn.dataset.slidePosition;

        const carouselGrid    = document.querySelector('#'+carouselId+' .carousel-grid');
        const carouselWrapper = document.querySelector('#'+carouselId+' .carousel-wrapper');
        const wrapperWidth    = carouselWrapper.clientWidth;
        const carouselItem    = document.querySelector('#'+carouselId+' .carousel-item').offsetWidth;
        const dataSize        = carouselGrid.getAttribute('data-size');
        const dataShow        = wrapperWidth / carouselItem;
        const datacarousels   = Math.round(dataSize - dataShow);
        
        if (carouselId != lastId) {
          count = slideTo;
          translateX = slidePosition;
          lastId = carouselId;
        }

        carouselGrid.style.transform = `translate3d(${translateX}px, 0, 0)`;

        if (direction == 'prev') {
          if(count > 0){
            count--;
            translateX = translateX + carouselItem;
            carouselGrid.style.transform = `translate3d(${translateX}px, 0, 0)`;
            btn.dataset.slideTo = count;
            btn.dataset.slidePosition = translateX;
          }
        }else{
          if(count < datacarousels){
            count++;
            translateX = translateX - carouselItem;
            carouselGrid.style.transform = `translate3d(${translateX}px, 0, 0)`;
            btn.dataset.slideTo = count;
            btn.dataset.slidePosition = translateX;
          }
        }
        
      })
    })
  }
}

window.onload = function () {
  initCarousel();
}
window.onresize = function () {
  initCarousel();
}