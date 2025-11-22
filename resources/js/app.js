
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper/bundle';

import 'swiper/css/bundle';

// Run the code when the page loads
document.addEventListener('DOMContentLoaded', () => {

    // Finds the slider by class .my-banner-slider
    if (document.querySelector('.my-banner-slider')) {

        const swiper = new Swiper('.my-banner-slider', {
            autoplay: {
                delay: 5000, // 5 seconds
                disableOnInteraction: false,
            },

            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
});


