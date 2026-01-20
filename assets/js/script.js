// Global JavaScript
// DCLL Website
// Shared functionality used across all pages.
// Feature-specific JS should be in features/{feature}/js/

(function ($) {
    'use strict';

    // Mobile Menu Toggle
    $('[data-toggle="offcanvas"]').on('click', function () {
        $('.navbar-collapse').toggleClass('show');
    });

    // Revolution Slider (if exists)
    var $heroBanner = $('.tp-banner');
    var $heroBannerFullscreen = $('.tp-banner-full');

    if ($heroBanner.length > 0) {
        $heroBanner.show().revolution({
            delay: 6000,
            startheight: 700,
            startwidth: 1170,
            hideThumbs: 1000,
            navigationType: 'none',
            touchenabled: 'on',
            onHoverStop: 'on',
            navOffsetHorizontal: 0,
            navOffsetVertical: 0,
            dottedOverlay: 'none',
            fullWidth: 'on'
        });
    }

    if ($heroBannerFullscreen.length > 0) {
        $heroBannerFullscreen.show().revolution({
            delay: 6000,
            hideThumbs: 1000,
            navigationType: 'none',
            touchenabled: 'on',
            onHoverStop: 'on',
            navOffsetHorizontal: 0,
            navOffsetVertical: 0,
            dottedOverlay: 'none',
            fullScreen: 'on'
        });
    }

    // Testimonials Carousel
    $(function () {
        var testimonialCarouselConfig = {
            loop: true,
            rewind: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: true },
                700: { items: 1, nav: false },
                900: { items: 2, nav: false },
                1170: { items: 2, nav: true }
            }
        };

        $('.testimonials_list').owlCarousel(testimonialCarouselConfig);
    });

    // General Owl Carousel
    $(function () {
        var generalCarouselConfig = {
            loop: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: true },
                700: { items: 1, nav: false },
                900: { items: 2, nav: false },
                1170: { items: 3, nav: true, loop: true }
            }
        };

        $('.owl-carousel').owlCarousel(generalCarouselConfig);
    });

    // Close Mobile Menu on Link Click
    $('.navbar-collapse a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Submenu Dropdown Toggle
    $('.fa-caret-down').on('click', function (event) {
        event.preventDefault();
        var $submenu = $(this).next();
        $submenu.slideToggle();
    });

})(jQuery);