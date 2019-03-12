<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>

</head>
<body>

<?php get_template_part('template-parts/symbols'); ?>

<header class="header_section">
    <nav class="navbar navbar-expand-xl navigation_wrap align-items-center justify-content-between">
        <a class="navbar-brand nav_logo" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_file_uri('images/logo_header.png'); ?>" alt="">
        </a>

        <button class="navbar-toggler menu_main_btn" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu_btn menu_btn_top"></span>
            <span class="menu_btn menu_btn_middle"></span>
            <span class="menu_btn menu_btn_end"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav nav_list">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink('10'); ?>">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Books
                    </a>

					<?php $books = new WP_Query([
						'post_type' => 'book',
						'orderby' => 'id',
                        'order' => 'asc'
					]);
					if ($books->have_posts()) : ?>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

							<?php while ($books->have_posts()) : $books->the_post(); ?>
                                <a class="dropdown-item" href="<?php echo get_permalink(); ?>">
									<?php echo get_the_title(); ?>
                                </a>
							<?php endwhile; ?>

                        </div>

					<?php endif;
					wp_reset_postdata(); ?>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink('14'); ?>">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink('19'); ?>">News</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main id="app">