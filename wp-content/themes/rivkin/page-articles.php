<?php
get_header();
?>

    <!--================= main desk -->

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(14, 'full'); ?>);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-5">
                    <div class="main_desk_title d-flex flex-column">
                        <h1>Articles</h1>
                        <div class="main_desk_bread">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Main</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Articles</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= articles page section -->
<?php $articles = new WP_Query([
    'category_name' => 'articles',
    'posts_per_page' => 4
]);
if ($articles->have_posts()): ?>

    <section class="margin_section articles_page_section">
        <div class="container">

            <div class="masonry_articles">
                <?php while ($articles->have_posts()) : $articles->the_post();

                    get_template_part('template-parts/article-preview');

                endwhile; ?>
            </div>
        </div>

        <?php

        if ($articles->max_num_pages > 1) : ?>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-loadmore">
                    <svg width="19" height="19">
                        <use xlink:href="#pen_icon"></use>
                    </svg>
                    More articles
                </a>
            </div>
        <?php endif; ?>

    </section>

<?php endif;
wp_reset_postdata();
get_footer();
