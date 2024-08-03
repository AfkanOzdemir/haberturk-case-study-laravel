import './bootstrap';

// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';

var homeSwiper = new Swiper(".home-swiper", {
    slidesPerView: 'auto',
    direction: "vertical",
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: false,
    },
    mousewheel: true,
});

var newsSwiper = new Swiper(".news-swiper", {
    slidesPerView: 'auto',
    direction: "horizontal",
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: false,
    },
    mousewheel: true,
});


var detailsSwiper = new Swiper(".details-swiper", {
    slidesPerView: "auto",
    direction: "horizontal",
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: false,
    },
    breakpoints: {
        640: {
            direction: "horizontal",
            slidesPerView: "auto",
        },
        1024: {
            direction: "vertical",
            slidesPerView: "auto",
            spaceBetween: 0,
        },
    },
    mousewheel: true,
});
