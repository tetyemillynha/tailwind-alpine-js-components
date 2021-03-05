/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

//Scripts to Dropdown Menu
function initDropdownMenu() {
  var dropdownItems = document.querySelectorAll('.dropdown');
  dropdownItems.forEach(function (menu) {
    ['touchstart', 'click'].forEach(function (userEvent) {
      menu.addEventListener(userEvent, handleClick);
    });

    menu.onmouseout = function () {
      this.classList.remove('active');
    };
  });

  function handleClick(event) {
    event.preventDefault();
    this.classList.add('active');
  }

  ;
}

initDropdownMenu(); //END Scripts to Dropdown Menu
//Scripts to Anime on Scroll

function initScrollAnime() {
  var sections = document.querySelectorAll('[data-anime="scroll"]');

  if (sections.length) {
    var animaScroll = function animaScroll() {
      sections.forEach(function (section) {
        var sectionTop = section.getBoundingClientRect().top;
        var isSectionVisible = sectionTop - wHalf < 0;
        if (isSectionVisible) section.classList.add('ativo');else section.classList.remove('ativo');
      });
    };

    var wHalf = window.innerHeight * 0.8;
    animaScroll();
    window.addEventListener('scroll', animaScroll);
  }
}

initScrollAnime(); //END Scripts to Anime on Scroll
//Scripts to Tabs

function getSiblings(elem) {
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
  var tabList = document.querySelectorAll('[data-tab="tablist"] li a');
  var tabContent = document.querySelectorAll('[data-tab="content"] .tab-pane');

  if (tabList.length && tabContent.length) {
    var activeTab = function activeTab(id) {
      var elem = document.querySelector(id);
      var siblings = getSiblings(elem);
      siblings.forEach(function (section) {
        section.classList.remove('active');
      });
      var direction = elem.dataset.anime;
      elem.classList.add('active', direction);
    }; //get current clicked item and active tab by id


    tabList.forEach(function (navLink) {
      navLink.addEventListener('click', function (e) {
        e.preventDefault();
        var navList = "#" + document.getElementById(navLink.id).parentElement.parentElement.id + ' li a';
        var navListLinks = document.querySelectorAll(navList);
        navListLinks.forEach(function (links) {
          links.classList.remove('active');
        });
        navLink.classList.add('active');
        var id = navLink.getAttribute("href");
        activeTab(id);
      });
    });
  }
}

initTabNav(); //END Scripts to Tabs
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

function initToggleNavbar() {
  var btnToggle = document.querySelectorAll('.btn-toggle-navbar');

  if (btnToggle) {
    btnToggle.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        var navbarToggle = document.getElementById(btn.dataset.target);
        var navbarExpanded = btn.dataset.expanded;

        if (navbarExpanded == 'true') {
          navbarToggle.classList.remove('lg:block', 'md:block', 'sm:block', 'block');
          navbarToggle.classList.add('lg:hidden', 'md:hidden', 'sm:hidden', 'hidden');
          btn.dataset.expanded = false;
        } else {
          navbarToggle.classList.remove('lg:hidden', 'md:hidden', 'sm:hidden', 'hidden');
          navbarToggle.classList.add('lg:block', 'md:block', 'sm:block', 'block');
          btn.dataset.expanded = true;
        }
      });
    });
  }
}

initToggleNavbar();

function initCarousel() {
  var count = 0;
  var translateX = 0;
  var lastId = "";
  var btnCarousel = document.querySelectorAll('button[data-carousel]');

  if (btnCarousel.length) {
    btnCarousel.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        var carouselId = btn.dataset.carousel;
        var direction = btn.dataset.slide;
        var slideTo = btn.dataset.slideTo;
        var slidePosition = btn.dataset.slidePosition;
        var carouselGrid = document.querySelector('#' + carouselId + ' .carousel-grid');
        var carouselWrapper = document.querySelector('#' + carouselId + ' .carousel-wrapper');
        var wrapperWidth = carouselWrapper.clientWidth;
        var carouselItem = document.querySelector('#' + carouselId + ' .carousel-item').offsetWidth;
        var dataSize = carouselGrid.getAttribute('data-size');
        var dataShow = wrapperWidth / carouselItem;
        var datacarousels = Math.round(dataSize - dataShow);

        if (carouselId != lastId) {
          count = slideTo;
          translateX = slidePosition;
          lastId = carouselId;
        }

        carouselGrid.style.transform = "translate3d(".concat(translateX, "px, 0, 0)");

        if (direction == 'prev') {
          if (count > 0) {
            count--;
            translateX = translateX + carouselItem;
            carouselGrid.style.transform = "translate3d(".concat(translateX, "px, 0, 0)");
            btn.dataset.slideTo = count;
            btn.dataset.slidePosition = translateX;
          }
        } else {
          if (count < datacarousels) {
            count++;
            translateX = translateX - carouselItem;
            carouselGrid.style.transform = "translate3d(".concat(translateX, "px, 0, 0)");
            btn.dataset.slideTo = count;
            btn.dataset.slidePosition = translateX;
          }
        }
      });
    });
  }
}

window.onload = function () {
  initCarousel();
};

window.onresize = function () {
  initCarousel();
};

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/******/ 	// the startup function
/******/ 	// It's empty as some runtime module handles the default behavior
/******/ 	__webpack_require__.x = x => {};
/************************************************************************/
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// Promise = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0
/******/ 		};
/******/ 		
/******/ 		var deferredModules = [
/******/ 			["./resources/js/app.js"],
/******/ 			["./resources/sass/app.scss"]
/******/ 		];
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		var checkDeferredModules = x => {};
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime, executeModules] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0, resolves = [];
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					resolves.push(installedChunks[chunkId][0]);
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			while(resolves.length) {
/******/ 				resolves.shift()();
/******/ 			}
/******/ 		
/******/ 			// add entry modules from loaded chunk to deferred list
/******/ 			if(executeModules) deferredModules.push.apply(deferredModules, executeModules);
/******/ 		
/******/ 			// run deferred modules when all chunks ready
/******/ 			return checkDeferredModules();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 		
/******/ 		function checkDeferredModulesImpl() {
/******/ 			var result;
/******/ 			for(var i = 0; i < deferredModules.length; i++) {
/******/ 				var deferredModule = deferredModules[i];
/******/ 				var fulfilled = true;
/******/ 				for(var j = 1; j < deferredModule.length; j++) {
/******/ 					var depId = deferredModule[j];
/******/ 					if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferredModules.splice(i--, 1);
/******/ 					result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 				}
/******/ 			}
/******/ 			if(deferredModules.length === 0) {
/******/ 				__webpack_require__.x();
/******/ 				__webpack_require__.x = x => {};
/******/ 			}
/******/ 			return result;
/******/ 		}
/******/ 		var startup = __webpack_require__.x;
/******/ 		__webpack_require__.x = () => {
/******/ 			// reset startup function so it can be called again when more startup code is added
/******/ 			__webpack_require__.x = startup || (x => {});
/******/ 			return (checkDeferredModules = checkDeferredModulesImpl)();
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// run startup
/******/ 	var __webpack_exports__ = __webpack_require__.x();
/******/ 	
/******/ })()
;