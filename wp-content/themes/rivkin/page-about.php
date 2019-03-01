<?php
/*
Template Name: About
Template Post Type: page
*/
get_header();
?>


    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-5">
                    <div class="main_desk_title d-flex flex-column">
                        <h1>About</h1>
                        <div class="main_desk_bread">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Main</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="text_section" style="background: linear-gradient(360deg, #F9F9F9 0%, rgba(249, 249, 249, 0) 50%);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col offset-lg-1">
                    <div class="title_h4">
                        <h4>Kirill Rivkin</h4>
                        <span class="line"></span>
                    </div>
                    <div class="text_wrap">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
require('template-parts/articles.php');
get_footer();