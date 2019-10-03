<?php

/**
 * Template Name: Test Prep
 *
 * @package Shoreditch
 */

get_header(); ?>

<style>
    .entry-hero {}
</style>

<div class="entry-hero" <?php shoreditch_background_image(); ?>>
    <div class="entry-hero-wrapper">
        <div class="title-wrap">
            <h1 style="color: #fff">Test Prep</h1>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main" data-template="test-prep">
        <article id="post-<?php the_ID(); ?>" <?php post_class();
                                                ?>>
            <div class="hentry-wrapper">
                <?php if (!has_post_thumbnail()) : ?>
                    <header class="entry-header" <?php shoreditch_background_image(); ?>>
                        <div class="entry-header-wrapper">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </div>
                        <!-- .entry-header-wrapper -->
                    </header>
                    <!-- .entry-header -->
                <?php endif; ?>

                <div class="entry-content">
                    <div class="content-wrap">
                        <div class="left">
                            <ul>
                                <li data-offering="sat-prep">SAT</li>
                                <ul data-offering="sat-prep">
                                    <li><a href="/test-prep/sat/private-tutoring" data-offering="sat_private-tutoring">Private Tutoring</a></li>
                                    <li><a href="/test-prep/sat/semi-private-tutoring" data-offering="sat_semi-private-tutoring">Semi-Private Tutoring </a></li>
                                    <li><a href="/test-prep/sat/prep-courses" data-offering="sat_prep-courses">Prep Courses</a></li>
                                    <li><a href="/test-prep/sat/essential-final-reviews" data-offering="sat_essential-final-reviews">Essential Final Reviews</a></li>
                                    <li><a href="/test-prep/sat/actual-conditions-exams" data-offering="sat_actual-conditions-exams">Actual Conditions Exams</a></li>
                                </ul>
                                <li data-offering="act-prep">ACT</li>
                                <ul data-offering="act-prep">
                                    <li><a href="/test-prep/act/private-tutoring" data-offering="act_private-tutoring">Private Tutoring</a></li>
                                    <li><a href="/test-prep/act/semi-private-tutoring" data-offering="act_semi-private-tutoring">Semi-Private Tutoring </a></li>
                                    <li><a href="/test-prep/act/prep-courses" data-offering="act_prep-courses">Prep Courses</a></li>
                                    <li><a href="/test-prep/act/essential-final-reviews" data-offering="act_essential-final-reviews">Essential Final Reviews</a></li>
                                    <li><a href="/test-prep/act/actual-conditions-exams" data-offering="act_actual-conditions-exams">Actual Conditions Exams</a></li>
                                </ul>
                                <li data-offering="graduate">Graduate</li>
                                <ul data-offering="graduate">
                                    <li><a href="/test-prep/graduate/gmat" data-offering="graduate_gmat">GMAT</a></li>
                                    <li><a href="/test-prep/graduate/gre" data-offering="graduate_gre">GRE</a></li>
                                </ul>
                                <li data-offering="high-school">High School</li>
                                <ul data-offering="high-school">
                                    <li><a href="/test-prep/high-school/ssat" data-offering="high-school_ssat">SSAT</a></li>
                                    <li><a href="/test-prep/high-school/isee" data-offering="high-school_isee">ISEE</a></li>
                                    <li><a href="/test-prep/high-school/hspt" data-offering="high-school_hspt">HSPT</a></li>
                                </ul>
                            </ul>
                        </div>
                        <div class="right">
                            <?php
                            while (have_posts()) : the_post();

                                get_template_part('template-parts/content-test-prep', get_post_format());


                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </div>
                <!-- .entry-content -->

                <?php
                edit_post_link(
                    sprintf(
                        /* translators: %s: Name of current post */
                        esc_html__('Edit %s', 'shoreditch'),
                        the_title('<span class="screen-reader-text">"', '"</span>', false)
                    ),
                    '<footer class="entry-footer"><span class="edit-link">',
                    '</span></footer><!-- .entry-footer -->'
                );
                ?>
            </div>
            <!-- .hentry-wrapper -->
        </article>
        <!-- #post-## -->
    </main>
    <!-- #main -->
</div>
<!-- #primary -->
<script>
    jQuery('[data-offering="' + window.pageKey + '"').addClass('active');
</script>
<?php
get_sidebar('footer');
get_footer();
