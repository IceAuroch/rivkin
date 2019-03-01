<?php

get_header();

$sections = [
    'symbols',
    'main',
    'main-slider',
    'articles'
];

foreach ($sections as $section) {
    get_template_part('template-parts/' . $section);
}

get_footer();