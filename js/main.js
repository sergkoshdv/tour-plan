const hotelSlider = new Swiper('.hotel-slider', {
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
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
});
const reviewsSlider = new Swiper('.reviews-slider', {
 
  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
});

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click",function () {
  console.log("Клик по кнопке меню")
  document.querySelector(".navbar-bottom").classList.toggle("navbar-bottom--visible");
})

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click",function () {
  document.querySelector("body").classList.toggle("static");
})
