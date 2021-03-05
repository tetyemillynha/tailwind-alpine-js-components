//Menu toggle Mobile
function initNavbarToggle(){
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
initNavbarToggle(); 