<?php $articles = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'articles',
    'posts_per_page' => 4
]);
if ($articles->have_posts()): ?>

<section class="articles_section">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3>Last Articles</h3>
            </div>
        </div>
        <div class="row">
    <?php while ($articles->have_posts()) : $articles->the_post(); ?>
            <div class="col-sm-6 col-lg-6 col-xl-3 anim_article_item1">
                <div class="articles_item">
                    <div class="articles_item_img">
                        <a href="<?php echo the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="articles_item_content">
                        <h4><?php echo the_title(); ?></h4>
                        <span>Posted on <?php echo get_the_date('jS F  Y'); ?></span>
                        <p><?php echo wp_trim_words(get_the_content(), 50, '...'); ?></p>
                        <div class="articles_item_link text-right">
                            <a href="<?php echo the_permalink(); ?>">More info</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <a href="<?php echo get_permalink('14'); ?>" class="btn btn-primary">
                    <svg width="19" height="19">
                        <use xlink:href="#pen_icon"></use>
                    </svg>
                    More articles
                </a>
            </div>
        </div>
    </div>
</section>

<?php endif;
wp_reset_postdata(); ?>