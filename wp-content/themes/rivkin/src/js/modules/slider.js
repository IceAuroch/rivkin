
import Flickity from 'flickity';

var FlickityFade = require('flickity-fade');

if ($('.main_page_slider')) {

    var elemA = document.querySelector('.main_page_slider');

    if (elemA) {
        const flkty1 = new FlickityFade(elemA, {
            prevNextButtons: false,
            pageDots: true,
            cellAlign: 'center',
            contain: true,
            draggable: false,
            adaptiveHeight: true,
            wrapAround: true,
            fade: true,
            pauseAutoPlayOnHover: false,
            autoPlay: 3000
        });

    }

};


if ($('.main_slider')) {

    var elem1 = document.querySelector('.main_slider');

    if (elem1) {
        const flkty1 = new FlickityFade(elem1, {
            prevNextButtons: false,
            pageDots: true,
            cellAlign: 'center',
            contain: true,
            draggable: true,
            adaptiveHeight: true,
            wrapAround: true,
            fade: true,
            autoPlay: 3000,
            initialIndex: 1, 
            on: {
                change: function( index ) {
                    document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`


                    var prev_img = $( ".main_slider .is-selected" ).prev().find('.slider_item_img img').attr('src');

                    var next_img = $( ".main_slider .is-selected" ).next().find('.slider_item_img img').attr('src');


                    if ( typeof  prev_img == 'undefined') {
                        var prev_img = $( ".main_slider .main_slider_item:last-child" ).find('.slider_item_img img').attr('src');
                    }

                    if ( typeof  next_img == 'undefined') {
                        var next_img = $( ".main_slider .main_slider_item:first-child" ).find('.slider_item_img img').attr('src');
                    }

                    $('.prev_img img').attr('src', prev_img);

                    $('.next_img img').attr('src', next_img);
                }
              }
        });

        var prevArrowReviews = document.querySelector('.js_prev');

        prevArrowReviews.addEventListener('click', function () {
            flkty1.previous(true, false);
        });

        var prevArrowReviews2 = document.querySelector('.prev_img');

        prevArrowReviews2.addEventListener('click', function () {
            flkty1.previous(true, false);
        });




        var nextArrowReviews = document.querySelector('.js_next');

        nextArrowReviews.addEventListener('click', function () {
            flkty1.next(true, false);
        });

        var nextArrowReviews2 = document.querySelector('.next_img');

        nextArrowReviews2.addEventListener('click', function () {
            flkty1.next(true, false);
        });
    }

    var elem2 = document.querySelector('.about_book_slider');

    if (elem2) { 
        if ($(window).width() < 768) {
            const flkty2 = new FlickityFade(elem2, {
                prevNextButtons: false,
                pageDots: true,
                cellAlign: 'center',
                contain: true,
                draggable: true,
                adaptiveHeight: true,
                wrapAround: true,
                fade: false,
                initialIndex: 0,
                on: {
                    change: function( index ) {
                        document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`
                    //   console.log( 'Slide changed to' + index );
                    }
                  }
            });

            var prevArrowReviews = document.querySelector('.main-slider-arrow-prev');

            prevArrowReviews.addEventListener('click', function () {
                flkty2.previous(true, false);
            });

            var nextArrowReviews = document.querySelector('.main-slider-arrow-next');

            nextArrowReviews.addEventListener('click', function () {
                flkty2.next(true, false);
            });

        } else {

            const flkty2 = new FlickityFade(elem2, {
                prevNextButtons: false,
                pageDots: true,
                cellAlign: 'center',
                contain: true,
                draggable: true,
                adaptiveHeight: true,
                wrapAround: true,
                fade: false,
                initialIndex: 0,
                on: {
                    change: function( index ) {
                        document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`
                    //   console.log( 'Slide changed to' + index );
                    }
                  }
            });
            var prevArrowReviews = document.querySelector('.main-slider-arrow-prev');

            prevArrowReviews.addEventListener('click', function () {
                flkty2.previous(true, false);
            });

            var nextArrowReviews = document.querySelector('.main-slider-arrow-next');

            nextArrowReviews.addEventListener('click', function () {
                flkty2.next(true, false);
            });

        }


    
        
    }


    var elem3 = document.querySelector('.slider_modal');

    if (elem3) {

        const flkty3 = new FlickityFade(elem3, {
            prevNextButtons: false,
            pageDots: false,
            cellAlign: 'center',
            contain: true,
            draggable: true,
            adaptiveHeight: false,
            wrapAround: true,
            fade: false,
            initialIndex: 0
        });

        var prevArrowReviews = document.querySelector('.modal_prev');

        prevArrowReviews.addEventListener('click', function () {
            flkty3.previous(true, false);
        });

        var nextArrowReviews = document.querySelector('.modal_next');

        nextArrowReviews.addEventListener('click', function () {
            flkty3.next(true, false);
        });
        
    }
};


$(document).ready(function(){


    var slider_cont_all = $(".about_book_slider_item").length;

    var main_slider_cont_all = $(".main_slider_item").length;

    $('.slider_counter_all').text(slider_cont_all);

    $('.main_slider_counter_all').text(main_slider_cont_all);
});



