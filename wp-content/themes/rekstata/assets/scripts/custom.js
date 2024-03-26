jQuery(document).ready(function($) {
    // Top nav sub menu
    $('.head-nav ul li:first-child a').on('click', function () {
        //e.preventDefault();
        $('.head-nav ul li ul').stop().fadeToggle();

        $('.head-nav ul li ul').on('mouseleave', function () {
            $('.head-nav ul li ul').fadeOut();
        })
    });

    // Top nav languages
    $('.head-current').on('click', function () {
        $('.head-lang-list').fadeToggle();

        $('.head-lang-list').on('mouseleave', function () {
            $(this).fadeOut();
        })
    });

    // Mobile menu
    $('.hamburger').on('click', function () {
        $('.hamburger').addClass('is-active');
        var effect = 'slide';
        var options = { direction: 'right' };
        var duration = 400;
        $('.mob-menu-wrap').toggle(effect, options, duration);
        $('.mob-menu-over').fadeIn(400);
    });

    $('.mob-menu-over, .mob-close span').on('click', function () {
        $('.hamburger').removeClass('is-active');
        var effect = 'slide';
        var options = { direction: 'right' };
        var duration = 400;
        $('.mob-menu-wrap').toggle(effect, options, duration);
        $('.mob-menu-over').fadeOut(400);
    });

    $('.mob-ul .menu-item-has-children a').on('click', function () {
        $('.mob-ul .sub-menu').slideToggle();
        $(this).toggleClass('menu-item-has-children-close');
    });

    // Single our work links
    $('.single-ow-prev a').append('<i class="fas fa-chevron-left"></i><span>Ankstesnis projektas</span>');
    $('.single-ow-next a').append('<span>Sekantis projektas</span><i class="fas fa-chevron-right"></i>');

    // Single our work gallery
    $('.single-ow-gallery-main').slick({
        dots: false,
        infinite: true,
        arrows: false,
        speed: 500,
        adaptiveHeight:true,
        slidesToShow: 1,
        draggable: false,
        autoplay: false,
        slidesToScroll: 1,
        asNavFor: '.single-ow-gallery-nav',
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    arrows: true,
                }
            }
         ]
    });

    $('.single-ow-gallery-nav').slick({
        dots: false,
        infinite: true,
        arrows: false,
        speed: 500,
        slidesToShow: 4,
        draggable: false,
        autoplay: false,
        slidesToScroll: 1,
        focusOnSelect: true,
        asNavFor: '.single-ow-gallery-main',
    });

    // About us reviews
    $('.about-us-one-slide').slick({
        dots: true,
        infinite: true,
        arrows: true,
        speed: 500,
        slidesToShow: 2,
        draggable: false,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    draggable: true
                }
            }
         ]
    });

    // About us certificates
    $('.about-us-three-content').slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 500,
        slidesToShow: 3,
        draggable: false,
        autoplay: true,
        autoplaySpeed: 3500,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1
                }
            }
         ]
    });
});
