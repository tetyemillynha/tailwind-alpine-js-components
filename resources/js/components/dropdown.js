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
