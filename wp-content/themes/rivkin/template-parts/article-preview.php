<div class="masonry_articles_item anim_article_item1">
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