"use strict"

const frontPageSlider = new Swiper(".swiper", {
  loop: true,
  direction: "horizontal",

  autoplay: {
    delay: 5000,
  },

  pagination: {
    el: ".swiper-pagination",
  },
})
