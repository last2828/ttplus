import Swiper from 'swiper';

let swiper = new Swiper ('.swiper-container', {
  // loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

let swiper1 = new Swiper ('.swiper-mobile', {
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-mobile-pagination',
    clickable: true,
  },
});

let swiperAboutCards = new Swiper ('.swiper-about-cards', {
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-about-cards-pagination',
    clickable: true,
  },
});

