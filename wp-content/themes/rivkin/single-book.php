<?php
/*
Template Name: Books page
Template Post Type: book
*/
get_header();
?>
    <!--================= main desk page other -->

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(12, 'large') ?>);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-7 col-md-5">
                    <div class="main_desk_title d-flex flex-column">
                        <h1><?php echo get_the_title(); ?></h1>
                        <div class="main_desk_bread">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Main</a></li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page"><?php echo get_the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_book_img ">
            <img src="<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>" alt="">
        </div>
    </section>


    <!--================= about book -->


    <section class="text_section">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="title_h4">
                        <h4>About Book</h4>
                        <span class="line"></span>
                    </div>
                    <div class="text_wrap">
                        <p><?php echo get_the_content(); ?></p>
                        <a href="<?php echo get_post_meta($post->ID, 'amazon_link', true); ?>">Amazon</a>
                        <a href="<?php echo get_post_meta($post->ID, 'ebay_link', true); ?>">E-Bay</a>
                        <a href="<?php echo get_post_meta($post->ID, 'kenbook_link', true); ?>">Ken Trotman Books
                            (UK)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================= form -->

    <section class="form_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop_wrap">
                        <div class="title_h4">
                            <svg width="21" height="21">
                                <use xlink:href="#box_icon"></use>
                            </svg>
                            <h4>Shipping details</h4>
                        </div>
                        <div class="radio_btn_wrap">
                            <div class="radio_btn">
                                <input checked id="1us" type="radio" name="type_book_bye">
                                <label for="1us" data-price="80">1 copy (unsinged) to the US $80.00 USD</label>
                            </div>
                            <div class="radio_btn">
                                <input id="3us" type="radio" name="type_book_bye">
                                <label for="3us" data-price="190">3 copies to the US $190.00 USD</label>
                            </div>
                            <div class="radio_btn">
                                <input id="1canada" type="radio" name="type_book_bye">
                                <label for="1canada" data-price="100">1 copy (unsigned) to Canada $100.00 USD</label>
                            </div>
                            <div class="radio_btn">
                                <input id="3canada" type="radio" name="type_book_bye">
                                <label for="3canada" data-price="210">3 copies to Canada $210.00 USD</label>
                            </div>
                            <div class="radio_btn">
                                <input id="1world" type="radio" name="type_book_bye">
                                <label for="1world" data-price="100">1 copy (unsigned) worldwide except Russia, Canada
                                    and Israel $100.00 USD</label>
                            </div>
                            <div class="radio_btn">
                                <input id="3world" type="radio" name="type_book_bye">
                                <label for="3world" data-price="255">3 copies wordlwide shipping $255.00 USD</label>
                            </div>
                        </div>
                        <div class="slider_btn_price d-flex align-items-center justify-content-end">
                            <div class="slider_price">
                                <span>$</span>
                                <p id="form_price">80</p>
                            </div>
                            <a href="#" class="btn btn-primary">
                                <svg width="16" height="16">
                                    <use xlink:href="#sword_icon"></use>
                                </svg>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="title_h4">
                        <h4>Book Reviews</h4>
                        <span class="line"></span>
                        <div class="slider_counter">
                            <p><span id="sliderCounterActive" class="slider_counter_active">1</span> / <span
                                        class="slider_counter_all">4</span></p>
                        </div>
                    </div>
                    <div class="about_book_slider">
                        <div class="about_book_slider_item">
                            <div class="text_wrap">
                                <p>A Study of the Eastern Sword by Kirill Rivkin and Brian Isaac, attempts for the
                                    first time to consider evolution of swords in Asia over the course of the last two
                                    millennia as a whole – from Scythians and Sarmatians, to East Asia and Japan, then
                                    back to the nomadic routes and the Pontic-Caspian Steppe of Khazars and Cumans, and
                                    then towards the whole consequent diversity of forms, employed in Persia, Mamluk
                                    Egypt, Turkey, Russia, Caucasus.

                                    360 pages with 182 illustrations, consisting of hundreds of individual photographs.
                                    Some items, such as the famed sword of Charlemagne, were published numerous times,
                                    but never in detail and quality available in this book. Others, such as unique 14th
                                    century Mongol period examples, were never publicly displayed before, and don’t even
                                    have known published analogues. From the sword awarded by General Denikin at the
                                    height of the Russian Civil War, to the one attributed to Albania’s Skanderbeg, or
                                    European Crusader blades, carried by Mamluk dignitaries, many examples chosen for
                                    this book are some of the most prominent, artistic, and scientifically important in
                                    the field.

                                    The analysis presented demonstrates a clear continuity in the development of a
                                    single edged long sword. It shows how this form evolved over time, and provides
                                    extensive guidance on attribution and dating of swords. Various technical, in
                                    particular – metallurgical, aspects involved in sword making are also discussed,
                                    including historical evidence related to the earliest wootz (bulat) making and the
                                    consequent evolution of this technology. There is also a somewhat controversial
                                    attempt to identify six distinctive periods in the history of Asian swords (and
                                    other aspects of material culture), and to relate transitions between them to
                                    competing forces of globalization and regionalization.

                                    A single copy can not be autographed as it usually ships directly from a warehouse,
                                    while 3 copies package can be signed by the author. Please specify in the request
                                    whether you want them signed, but in this case there could be a short delay with
                                    fulfilling the order. On sale, please use the paypal form below to request your
                                    copy.
                                </p>
                            </div>
                        </div>
                        <div class="about_book_slider_item">
                            <div class="text_wrap">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irurdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. The book can be
                                    purchased from: Amazon E-Bay Ken Trotman Books (UK)</p>

                                <h5>Prof. David Nicolle, The Bulletin of the School of Oriental and African Studies,
                                    2018</h5>
                            </div>
                        </div>
                        <div class="about_book_slider_item">
                            <div class="text_wrap">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irurdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. The book can be
                                    purchased from: Amazon E-Bay Ken Trotman Books (UK)</p>

                            </div>
                        </div>
                        <div class="about_book_slider_item">
                            <div class="text_wrap">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                    The book can be purchased from: Amazon E-Bay Ken Trotman Books (UK)</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider_arows_wrap">
                        <div class="main-slider-arrow main-slider-arrow-prev">
                            <svg width="16" height="16">
                                <use xlink:href="#prev_icon"></use>
                            </svg>
                            <span>Previous</span></div>
                        <div class="main-slider-arrow main-slider-arrow-next justify-content-end">
                            <span>Next</span>
                            <svg width="16" height="16">
                                <use xlink:href="#next_icon"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================= masonry -->


    <section class="masonry_img_section">
        <div class="container">
            <div class="row col">
                <div class="title_h4">
                    <h4>Galery Book’s Illustrations</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <a href="#" data-toggle="modal" data-target="#slider_modal">
                        <?php
                        $images = get_field('book_gallery');

                        if ($images): ?>
                            <div class="masonry_wrap mt-4">
                                <?php foreach ($images as $image): ?>
                                    <div class="masonty_wrap_item anim_article_item1">
                                        <img src="<?php echo $image['sizes']['large']; ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--================= Modal -->
    <div class="modal fade" id="slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_close">
                    <span data-dismiss="modal">+</span>
                </div>
                <?php
                $images = get_field('book_gallery');

                if ($images): ?>
                    <div class="slider_modal">
                        <?php foreach ($images as $image): ?>
                            <div class="slider_modal_item">
                                <img src="<?php echo $image['sizes']['large']; ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="slider_arows_wrap">
                    <div class="main-slider-arrow modal_arow modal_prev">
                        <svg width="16" height="16">
                            <use xlink:href="#prev_icon"></use>
                        </svg>
                        <span>Previous</span></div>
                    <div class="main-slider-arrow modal_arow modal_next justify-content-end">
                        <span>Next</span>
                        <svg width="16" height="16">
                            <use xlink:href="#next_icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require('template-parts/articles.php'); ?>

<?php
get_footer();
wp_reset_postdata();