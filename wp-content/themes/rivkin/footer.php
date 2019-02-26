<footer class="footer_section">
    <div class="footer_menu">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg">
                    <div class="footer_logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo get_theme_file_uri('images/logo_footer.png'); ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="footer_menu_link">
                        <a href="<?php echo get_permalink('10'); ?>">About</a>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="footer_menu_link">
                        <a href="#">My Books</a>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="footer_menu_link">
                        <a href="<?php echo get_permalink('14'); ?>">Articles</a>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="footer_menu_link">
                        <a href="<?php echo get_permalink('19'); ?>">News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_list_wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <?php $books = new WP_Query([
                        'post_type' => 'book',
                        'orderby' => 'id',
                        'order'   => 'desc'
                    ]);
                    if ($books->have_posts()): ?>
                    <ul class="footer_list">
                        <?php while ($books->have_posts()) : $books->the_post(); ?>
                        <li><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
                <div class="col">
                    <ul class="footer_list">
                        <li><a href="#">Nihonto in numbers</a></li>
                        <li><a href="#">How rare are the Eastern Swords?</a></li>
                        <li><a href="#">Kiyomaro, modern papers and 100% guarantee</a></li>
                        <li><a href="#">Cynical things to learn first in Arms and Armor</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="footer_list">
                        <li><a href="#">Nihonto in numbers</a></li>
                        <li><a href="#">How rare are the Eastern Swords?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_line_dev">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4 col-lg-4 order-md-1">
                    <div class="footer_line_dev_item ">
                        <div class="footer_line_dev_item_icon">
                            <a href="<?php echo get_theme_mod('facebook'); ?>">
                                <svg width="21" height="21">
                                    <use xlink:href="#fb_icon"></use>
                                </svg>
                            </a>
                            <a href="<?php echo get_theme_mod('youtube'); ?>">
                                <svg width="21" height="14">
                                    <use xlink:href="#yt_icon"></use>
                                </svg>
                            </a>
                            <a href="<?php echo get_theme_mod('twitter'); ?>">
                                <svg width="21" height="17">
                                    <use xlink:href="#twit_icon"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="footer_line_dev_item">
                        <p>© <?php echo date('Y'); ?> All rights reserved</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 order-md-2">
                    <div class="footer_line_dev_item d-flex justify-content-end">
                        <p>Design & web development <a href="#">ImpressionBureau</a> <?php echo date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php  wp_footer(); ?>

</body>
</html>