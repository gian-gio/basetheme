
let hamburger = document.querySelector('.header__hamburger');


hamburger.addEventListener("click", function() {
  document.body.classList.toggle('menu-open');
});

let icon_search = document.querySelectorAll('.icon-search a');

icon_search.forEach(function(link, index) {
  link.addEventListener("click", function(event) {
      event.preventDefault(); // Previene il comportamento predefinito del link
      var search_panel = document.querySelectorAll(".search-panel");
      search_panel[index].style.display = "block"; // Mostra l'elemento
  });
});


let btn_close_search = document.querySelectorAll('.btn-close-search');

btn_close_search.forEach(function(link, index) {
  link.addEventListener("click", function(event) {
      event.preventDefault(); // Previene il comportamento predefinito del link
      var search_panel = document.querySelectorAll(".search-panel");
      search_panel[index].style.display = "none"; // Nasconde l'elemento
  });
});


/*  -----------------------------------------------------------------------------------------------
  Header Menu add class scroll 
--------------------------------------------------------------------------------------------------- */

window.addEventListener('scroll', function(e) {
  
  if(window.scrollY > 300){
    document.body.classList.add('scroll-down');
  } else {
    document.body.classList.remove('scroll-down');
  }

  if(window.scrollY > 1600){
    document.body.classList.add('up-page');
  } else {
    document.body.classList.remove('up-page');
  }

});


// js scroll to
document.querySelectorAll('.scroll a[href^="#"]').forEach(elem => {
  elem.addEventListener('click', e => {
      e.preventDefault();
      let block = document.querySelector(elem.getAttribute('href')),
          offset = elem.dataset.offset ? parseInt(elem.dataset.offset) : 0,
          bodyOffset = document.body.getBoundingClientRect().top;
      window.scrollTo({
          top: block.getBoundingClientRect().top - bodyOffset + offset,
          behavior: 'smooth'
      }); 
      document.body.classList.remove('menu-open');
  });
});

// One page scroll  
let root_url = document.location.href.match(/(^[^#]*)/)

document.querySelectorAll('.page-scroll a[href^="'+root_url[0]+'#"]').forEach(elem => {
elem.addEventListener('click', e => {
    e.preventDefault();
    elem_id = elem.getAttribute('href').replace(root_url[0], "");
    let block = document.querySelector(elem_id),
        offset = elem.dataset.offset ? parseInt(elem.dataset.offset) : 0,
        bodyOffset = document.body.getBoundingClientRect().top;
    window.scrollTo({
        top: block.getBoundingClientRect().top - bodyOffset + offset,
        behavior: 'smooth'
    }); 
    document.body.classList.remove('menu-open');
});
});



// Scroll up page
const scrollUpButtons = document.querySelectorAll('.back-top');

// Aggiunge un evento di click a ciascun elemento
scrollUpButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Effettua lo scroll verso l'alto con animazione fluida
    window.scrollTo({
      top: 0, // Posizione verticale 0
      behavior: 'smooth' // Scorrimento fluido
    });
  });
});



// Accordion
document.addEventListener("DOMContentLoaded", function () {
  var headers = document.querySelectorAll(".accordion-header");

  headers.forEach(function (header) {
      header.addEventListener("click", function () {
          var content = this.nextElementSibling;

          if (content.style.maxHeight) {
              content.style.maxHeight = null;
          } else {
              var allContents = document.querySelectorAll(".accordion-content");
              allContents.forEach(function (item) {
                  item.style.maxHeight = null;
              });
              content.style.maxHeight = content.scrollHeight + "px";
          }
      });
  });
});



/*  
  Gsap Animation
----------------------------------------------------------------------- */

/* Elements Animation */
let tl = gsap.timeline();

tl.to(".fade-in", {opacity:1, y:0, duration:0.4, stagger: 0.3, ease:Power4.easeOut}, "0.5");

tl.to(".text-reveal",{clipPath:"polygon(0 0, 100% 0, 100% 100%, 0 100%)", y:0, duration:0.8, stagger: 0.3}, 0.7);


/* Scroll Animation */
ScrollTrigger.batch(".fade-in-scroll",{
  start:"top 60%",
  onEnter: (elements, triggers) => {
    gsap.to(elements, {opacity: 1, y:0, stagger: 0.3, duration:0.8, ease:Power2.easeOut});
  }

});




//Splide Js
var splide = new Splide( '.splide', {
  type   : 'loop',
  perPage: 5,
  perMove: 1,
  gap:'15px',
  pagination: false,
  breakpoints: {
    768: { 
      perPage: 1, 
    },
    1024: { 
      perPage: 3,
    },
  },});

splide.mount();