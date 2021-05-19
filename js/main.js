const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  autoplay: {
   delay: 3000,
 },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },


  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
    },
    // when window width is >= 767px
    767: {
      slidesPerView: 1,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 1,
    }
  }
});
