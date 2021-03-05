var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

var currentSlide = function(n) {
  showSlides(slideIndex = n);
}

function initCarousel(){
  const btnItem = document.querySelectorAll('.img-thumb')
  if (btnItem.length) {
    btnItem.forEach((item) => {
      item.addEventListener('click', function(e) {
        let to = item.dataset.to;
        showSlides(slideIndex = to);
      });
    });
  }
}
initCarousel();

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("carousel-item");
  var dots = document.getElementsByClassName("demo");
  
  if (n > slides.length) {slideIndex = 1;}
  if (n < 1) {slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}