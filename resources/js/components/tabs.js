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