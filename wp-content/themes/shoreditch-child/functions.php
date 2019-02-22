<?php

add_action('wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa()
{
    wp_enqueue_style('load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/brands.css');
}
