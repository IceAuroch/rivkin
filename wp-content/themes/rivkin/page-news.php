<?php
get_header();
?>

    <!--================= main desk -->

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_theme_file_uri('images/article_bg.jpg'); ?>);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-5">
                    <div class="main_desk_title d-flex flex-column">
                        <h1>News</h1>
                        <div class="main_desk_bread">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Main</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">News</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= news page section -->
<?php $news = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 4
]);
if ($news->have_posts()): ?>

    <section class="margin_section articles_page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="masonry_articles">
                        <?php while ($news->have_posts()) : $news->the_post(); ?>
                            <div class="masonry_articles_item anim_article_item1">
                                <div class="articles_item">
                                    <div class="articles_item_img">
                                        <a href="<?php echo the_permalink(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>" alt="">
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
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary">
                        <svg width="19" height="19">
                            <use xlink:href="#pen_icon"></use>
                        </svg>
                        More articles
                    </a>
                </div>
            </div>
            <?php
            global $wp_query; // you can remove this line if everything works for you

            // don't display the button if there are not enough posts
            if (  $wp_query->max_num_pages > 1 )
                echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well
            ?>
        </div>
    </section>

<?php endif;
wp_reset_postdata(); ?>

<?php
get_footer();
?>