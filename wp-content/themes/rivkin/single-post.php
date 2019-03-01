<?php
/*
Template Name: single post
Template Post Type: post
*/
get_header();
$post_type = wp_get_post_categories($post->ID);
?>

    <!--================= main desk -->

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">

        <div class="main_desk_grad"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-5">
                    <div class="main_desk_title d-flex flex-column">
                        <div class="main_desk_bread">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo site_url(); ?>">Main</a>
                                    </li>

                                    <?php if ($post_type[0] === 2): ?>
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo the_permalink(14); ?>">Articles</a>
                                        </li>
                                    <?php else : ?>
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo the_permalink(19); ?>">News</a>
                                        </li>
                                    <?php endif; ?>

                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo the_title(); ?>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= articles page section -->

    <section class="margin_section articles_page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="articles_item articles_inside_item">
                        <h2><?php echo the_title(); ?></h2>
                        <span class="articles_inside_item_date">Posted on <?php echo get_the_date('jS F  Y'); ?></span>
                        <div class="articles_inside_item_text">

                            <?php the_content(); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
if ($post_type[0] === 2)
    require 'template-parts/articles.php';
else
   require 'template-parts/news.php';


get_footer();
