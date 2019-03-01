<?php
$about =new WP_Query([
        'post_type' => 'page',
        'page_id' => 10
]);
if ($about->have_posts()):
?>
<section class="main_desk_section d-flex align-items-end">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-sm-7 col-lg-5 ">
                <div class="main_desk_title d-flex flex-column">
                    <h1><?php $text = get_post(8); echo $text->post_content; ?></h1>
                    <p>Kirill A. Rivkin</p>
                </div>
                <div class="sub_title sub_title_main">
                    <h3 >About me</h3>
                    <?php while($about->have_posts()): $about->the_post(); ?>
                    <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                    <?php endwhile; ?>
                    <a href="<?php echo get_permalink('10'); ?>">
                        <svg width="16" height="16">
                            <use xlink:href="#samurai_icon"></use>
                        </svg>
                        More info
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
wp_reset_postdata();