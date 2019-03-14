<?php
/*
Template Name: Books page
Template Post Type: book
*/
get_header();
$id_bg = get_post_meta($post->ID, 'background_image', true);
?>
    <!--================= main desk page other -->

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo wp_get_attachment_image_url($id_bg, 'full'); ?>);">
        <div class="single_book_grad"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-md-6">
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
        <div class="container">
            <div class="row justify-content-center">


                <?php
                $reviews = new WP_Query([
                    'post_type' => 'review',
                    'meta_query' => [
                        [
                            'key' => 'book_review',
                            'value' => $post->ID,
                        ],
                    ],
                ]);
                if ($reviews->have_posts()) : ?>

                <div class="col-lg-8">
                    <div class="title_h4">
                        <h4>Book Reviews</h4>
                        <span class="line"></span>
                        <div class="slider_counter">
                            <p><span id="sliderCounterActive" class="slider_counter_active">1</span> / <span
                                        class="slider_counter_all">4</span></p>
                        </div>
                    </div>
                    <div class="about_book_slider">

                        <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>


                            <div class="about_book_slider_item">
                                <div class="text_wrap">
                                    <p>
                                        <?php echo the_content(); ?>
                                    </p>
                                </div>
                            </div>

                        <?php endwhile; ?>

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

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <!--================= masonry -->
<?php
$images = get_field('book_gallery', $post_id->ID);

if ($images): ?>
    <section class="masonry_img_section mb-0">
        <div class="container">
            <div class="title_h4">
                <h4>Galery Book’s Illustrations</h4>
            </div>

            <a href="#" data-toggle="modal" data-target="#slider_modal" class="d-block">
                <div class="masonry_wrap mt-4">
                    <?php foreach ($images as $image): ?>
                        <div class="text-center masonry_wrap_item">
                            <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </a>
        </div>
    </section>

    <div class="modal fade" id="slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_close">
                    <span data-dismiss="modal">+</span>
                </div>

                <div class="slider_modal">
                    <?php foreach ($images as $image): ?>
                        <div class="slider_modal_item"
                             style="background-image:url(<?php echo $image['sizes']['large']; ?>);">
                        </div>
                    <?php endforeach; ?>
                </div>

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
<?php endif; ?>
<?php require('template-parts/articles.php');
get_footer();
wp_reset_postdata();