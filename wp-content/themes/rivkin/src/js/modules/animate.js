import ScrollReveal from 'ScrollReveal';



// main page
if ($(window).width() > 1200) {
    ScrollReveal().reveal('.nav_logo img, .footer_logo', {
        origin: 'left',
        delay: 400,
        distance: '100px',
        mobile: false,
    });

    ScrollReveal().reveal('.nav_list, .footer_list', {
        origin: 'right',
        delay: 400,
        distance: '100px',
        mobile: false,
    });

    ScrollReveal().reveal('.nav_logo img', {
        origin: 'left',
        delay: 200,
        distance: '100px',
        mobile: false,
    });

    ScrollReveal().reveal('.main_desk_title', {
        origin: 'right',
        delay: 200,
        distance: '200px',
        mobile: false,
    });


    ScrollReveal().reveal('.sub_title_main', {
        origin: 'right',
        delay: 400,
        distance: '200px',
        mobile: false,
    });


    ScrollReveal().reveal('.main_slider_section, .text_section', {
        origin: 'bottom',
        delay: 500,
        distance: '200px',
        mobile: false,
    });

    // ScrollReveal().reveal('.anim_article_item1', {
    //     origin: 'bottom',
    //     delay: 500,
    //     distance: '400px',
    //     mobile: false,
    // });
    //
    // ScrollReveal().reveal('.anim_article_item2', {
    //     origin: 'bottom',
    //     delay: 600,
    //     distance: '400px',
    //     mobile: false,
    // });
    // ScrollReveal().reveal('.anim_article_item3', {
    //     origin: 'bottom',
    //     delay: 700,
    //     distance: '400px',
    //     mobile: false,
    // });
    // ScrollReveal().reveal('.anim_article_item4', {
    //     origin: 'bottom',
    //     delay: 800,
    //     distance: '400px',
    //     mobile: false,
    // });

    ScrollReveal().reveal('.footer_menu_link', {
        delay: 700,
        distance: '0',
        mobile: false,
    });


// about book

    ScrollReveal().reveal('.about_book_img', {
        scale: 0.5,
        delay: 300,
        duration: 800,
        distance: '0',
        mobile: false,
        rotate: {
            y: 100,
            x: 100
        }
    });

    ScrollReveal().reveal('.shop_wrap', {
        origin: 'left',
        delay: 500,
        duration: 500,
        distance: '500px',
        mobile: false,
    });

    ScrollReveal().reveal('.about_book_slider', {
        origin: 'right',
        delay: 500,
        duration: 500,
        distance: '500px',
        mobile: false,
    });

// ScrollReveal().reveal('.masonty_wrap_item', {
//     origin: 'bottom',
//     delay: 600,
//     distance: '400px',
//     mobile: false,
// });

}