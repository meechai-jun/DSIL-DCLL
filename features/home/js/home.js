// Home Feature JavaScript
// DCLL Website

$(function () {
    'use strict';

    // Hero Banner Swiper Slider
    var heroSliderConfig = {
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    };

    var heroSlider = new Swiper('.mySwiper', heroSliderConfig);

    // Gallery Lightbox
    if (typeof $.fancybox !== 'undefined') {
        $('[data-fancybox="images"]').fancybox({
            buttons: ['zoom', 'close'],
            loop: true,
            transitionEffect: 'slide'
        });
    }
});
