<?php get_header(); ?>

    <section class="main_desk_other_section pb-5"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(19, 'full'); ?>);">
        <div class="main_desk_grad"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-sm-6">
                    <div class="main_desk_title d-flex flex-column">
                        <h1><?= the_title(); ?></h1>
                        <div class="main_desk_bread">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Main</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $filters = [];
            $currentFilters = isset($_GET['filter']) ? array_map('strtolower', explode(',', $_GET['filter'])) : [];
            $gallery = new WP_Query([
                'post_type' => 'galery',
            ]);

            if ($gallery->have_posts()) {
                while ($gallery->have_posts()) : $gallery->the_post();
                    $images = get_field('galery_gallery');

                    if (count($images)) {
                        foreach ($images as $image) {
                            $tags = explode(',', $image['caption']);
                            if (count($tags)) {
                                foreach ($tags as $tag) {
                                    if ($tag !== '') {
                                        array_push($filters, ucfirst(trim($tag)));
                                    }
                                }
                            }
                        }
                    }
                endwhile;
            }

            $filters = array_unique($filters);
            ?>

            <div class="row">
                <?php if (count($filters)) : ?>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="main_desk_filter from_bottom_interval">
                            <ul class="filter_list row justify-content-around">
                                <?php foreach ($filters as $filter) : ?>
                                    <li class="col-auto">
                                        <a href="<?= makeFilterLink($_GET, $filter) ?>"
                                           class="<?= checkIfFilterExists($_GET,
                                               $filter) ? 'is-checked' : '' ?>">
                                            <?= $filter; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php
                endif;
                wp_reset_postdata(); ?>
            </div>
            <?php if (isset($_GET['filter'])) : ?>
                <div class="text-center position-relative" style="z-index: 100">
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                        Clear filter
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="mt_section page_news_section">
        <div class="container-fluid">
            <?php if ($gallery->have_posts()): $count = 0; ?>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <a href="#" data-toggle="modal" data-target="#slider_modal">
                            <div class="galery_masonry">

                                <?php while ($gallery->have_posts()): $gallery->the_post();
                                    $images = get_field('galery_gallery');
                                    if ($images):
                                        foreach ($images as $image): $count++;
                                            if (count($currentFilters) == 0
                                                || array_intersect(getImageTags($image), $currentFilters)) : ?>

                                                <div class="galery_masonry_item" data-indexImg="<?= $count; ?>">
                                                    <img class="lozad" src="<?= $image['url']; ?>" alt="">
                                                </div>

                                            <?php endif;
                                        endforeach;
                                    endif;
                                endwhile; ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endif;
            wp_reset_postdata(); ?>
    </section>


    <div class="modal fade" id="slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_close">
                    <span data-dismiss="modal">+</span>
                </div>

                <div class="modal_slider_main">

                    <?php
                    while ($gallery->have_posts()): $gallery->the_post();
                        $images = get_field('galery_gallery');
                        if ($images):
                            foreach ($images as $image):
                                if (count($currentFilters) == 0 || array_intersect(getImageTags($image),
                                        $currentFilters)) : ?>

                                    <div class="slider_modal_item">
                                        <div class="slider_modal_item__img"
                                             style="background-image:url(<?= $image['url']; ?>);"></div>
                                        <div class="slider_modal_item__text">
                                            <p><?= $image['description']; ?></p>
                                        </div>
                                    </div>

                                <?php endif;
                            endforeach;
                        endif;
                    endwhile; ?>
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

                <div class="slider_modal_counter_line">
                    <div class="slider_title">
                        <div class="slider_title_item">
                            <p>Description</p>
                        </div>
                        <div class="slider_title_item">
                            <p><span id="sliderCounterActive2">1</span> / <span class="slider_counter_all2">15</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php get_footer();
