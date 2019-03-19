<?php get_header(); ?>

    <section class="main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(19, 'full'); ?>);">
        <div class="main_desk_grad"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-sm-6">
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

    <posts category="news"></posts>

<?php get_footer();
