var swiperThumbs = new Swiper(".swiper-thumbs", {
  loop: false,
  slidesPerView: "auto",
  freeMode: true,
  watchSlidesProgress: true,
});

var swiperMain = new Swiper(".swiper-main", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next-single",
    prevEl: ".swiper-button-prev-single",
  },
  thumbs: {
    swiper: swiperThumbs,
  },
});
