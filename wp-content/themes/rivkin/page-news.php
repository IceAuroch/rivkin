<?php
get_header();
?>

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(14, 'full'); ?>);">
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


<?php $news = new WP_Query([
    'category_name' => 'news',
    'posts_per_page' => 4
]);
if ($news->have_posts()): ?>

    <section class="margin_section articles_page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="masonry_articles">

                        <?php while ($news->have_posts()) : $news->the_post();

                            get_template_part('template-parts/article-preview');

                        endwhile; ?>

                    </div>
                </div>
            </div>

            <?php
            if ($news->max_num_pages > 1) : ?>
                <div class="row">
                    <div class="col text-center">
                        <a href="#" class="btn btn-primary btn-loadmore">
                            <svg width="19" height="19">
                                <use xlink:href="#pen_icon"></use>
                            </svg>
                            More articles
                        </a>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

<?php endif;
wp_reset_postdata();
get_footer();
