<?php

/**
 * Template Name: Homepage
 *
 * Full width page template.
 * @package Shoreditch
 */

get_header(); ?>

<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'hero');

endwhile; // End of the loop.
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main" data-template="homepage">
        <div class="hentry-wrapper">
            <div class="entry-content">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
                <div class="hp-block-wrap">
                    <div class="hp-block">
                        <p>600</p>
                        <p>Lorem ipsum dolor sit amet, dolor quando habemus eum ut.</p>
                        <p></p>
                    </div>
                    <div class="hp-block">
                        <p>25</p>
                        <p>Lorem ipsum dolor sit amet, dolor quando habemus eum ut.</p>
                        <p></p>
                    </div>
                    <div class="hp-block">
                        <p>80%</p>
                        <p>Lorem ipsum dolor sit amet, dolor quando habemus eum ut.</p>
                        <p></p>
                    </div>
                </div>
                <p style="text-align: center; font-weight: bold; font-family: 'Helvetica'">LOCATION</p>
                <p><iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EiwxMDAgVHJhZGVjZW50ZXIgRHJpdmUsIFdvYnVybiwgTUEgMDE4MDEsIFVTQSIwEi4KFAoSCWtHb4QWdeOJEYD6fFLUDFScEGQqFAoSCSN3XJEWdeOJEbpUi7DmtIEh&amp;key=AIzaSyDok1mJQ2SsLvrNImAEMhwkD2Ey9SaP9Zw" allowfullscreen=""></iframe></p>
                <div class="big-btn-wrap">
                    <button onclick="location.href='/location'" class="big-btn"><br>
                        <i class="fas fa-map-marked-alt"></i>
                        <p></p>
                        <p>Directions</p>
                        <p> </p>
                    </button>
                </div>
            </div><!-- .entry-content -->
            <footer class="entry-footer"><span class="edit-link"><a class="post-edit-link" href="http://collegetestplan.loc/wp-admin/post.php?post=16&amp;action=edit">Edit <span class="screen-reader-text">"Home"</span></a></span></footer><!-- .entry-footer -->
        </div><!-- .hentry-wrapper -->

    </main>
    <!-- #main -->
</div>
<!-- #primary -->

<?php
get_sidebar('footer');
get_footer();
