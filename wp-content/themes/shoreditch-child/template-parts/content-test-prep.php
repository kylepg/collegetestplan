<?php

/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

?>


<div class="entry-content">
    <?php
    the_content(sprintf(
        /* translators: %s: Name of current post. */
        wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'shoreditch'), ['span' => ['class' => []]]),
        the_title('<span class="screen-reader-text">"', '"</span>', false)
    ));

    wp_link_pages([
        'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'shoreditch') . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'shoreditch') . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
    ]);
    ?>
</div>
<!-- .entry-content -->

<footer class="entry-footer">
    <?php shoreditch_entry_footer(); ?>
</footer>
<!-- .entry-footer -->