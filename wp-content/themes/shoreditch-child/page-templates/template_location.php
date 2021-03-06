<?php

/**
 * Template Name: Location
 *
 * @package Shoreditch
 */

get_header(); ?>

<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'hero');

endwhile; // End of the loop.
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main" data-template="location">
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
                            <img src="http://collegetestplan.loc/wp-content/uploads/2018/07/Screen-Shot-2018-07-08-at-7.50.14-PM.png" alt="" width="767" height="437" class="alignnone size-full wp-image-59" />
                            <h4>From West & Central</h4>
                            <ul>
                                <li>Take the Mass Pike East (I-90) or Route 2 East to I-95 North (Route 128 North).</li>
                                <li>From I-95 North, take Exit 34 (Winn Street). At the bottom of the exit ramp, turn left onto
                                    Winn Street. Travel 0.2 miles and turn right onto Beacon Street (just after the exit
                                    ramp for Route 128 South).</li>
                                <li>Follow Beacon Street, which becomes Sylvan Road, for 0.8 miles.</li>
                                <li>Turn left onto TradeCenter Drive.</li>
                                <li>Access map of property
                                    <a href="https://www.tradecenter128.com/directions.htm" target="_blank">here</a>.</li>
                            </ul>
                            <br>
                            <h4>From North</h4>
                            <ul>
                                <li>Take I-93 South to I-95 South (Route 128 South). </li>
                                <li> 1.6 miles to Exit 35 (Route 38 / Main Street). </li>
                                <li>At the end of the exit ramp, enter rotary and take the first right onto Main Street (Route
                                    38 North). </li>
                                <li>Turn left at first stoplight onto Elm Street. </li>
                                <li>Turn left onto Sylvan Road and proceed 0.3 miles past shopping plaza. </li>
                                <li>Turn right onto TradeCenter Drive. Access map of property
                                    <a href="https://www.tradecenter128.com/directions.htm" target="_blank">here</a>.</li>
                                </li>
                            </ul>
                            <br>
                            <h4>From Boston</h4>
                            <ul>
                                <li>Take I-93 North to I-95 South (Route 128 South). Follow above directions from Exit 35.</li>
                            </ul>
                            <br>
                            <h4>Public Transportation</h4>
                            <ul>
                                <li>MBTA Bus Route 134 provides regular service to TradeCenter 128 via Wellington Station (Orange
                                    Line) and Winchester Center (via Lowell Commuter Rail).</li>
                                <li>The MBTA Information Line is 617.222.3200 or 800.392.6100 or click
                                    <a href="https://www.mbta.com/" target="_blank">here</a>.</li>
                                <li>The hearing impaired may call the MBTA TDD Line at 617.222.5146. </li>
                            </ul>
                            <br>
                            <h4>GPS Navigation</h4>
                            <p> Please use 100 Sylvan Road, Woburn, MA, 01801.</p>
                            <h4>Parking</h4>
                            <p>Parking Garage and surface parking is available. Parking is free. </p>
                        </div>
                        <div class="right">
                            <div class="blue-wrapper">
                                <p>
                                    TRADECENTER 128 is separated into four buildings—100, 200, 300, 400. </p>
                                <p>Our suite is in 100 TRADECENTER, north of the large 300-400 building that houses Strega Prime.
                                </p>
                                <p> When entering TRADECENTER 128 from Sylvan Road, pass under the 300-400 archway with Strega
                                    Prime on your right.Drive toward and then around the pond, keeping the pond on your right
                                    and the five-story parking garage on your left. Follow signage to 100 TRADECENTER & 100
                                    South. </p>
                                <p> Century Suites entrance pictured below —South A G-700—is on the far right side of the building
                                    facing the pond.</p>
                            </div>
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EiwxMDAgVHJhZGVjZW50ZXIgRHJpdmUsIFdvYnVybiwgTUEgMDE4MDEsIFVTQSIwEi4KFAoSCWtHb4QWdeOJEYD6fFLUDFScEGQqFAoSCSN3XJEWdeOJEbpUi7DmtIEh&key=AIzaSyDok1mJQ2SsLvrNImAEMhwkD2Ey9SaP9Zw" allowfullscreen></iframe>

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

<?php
get_sidebar('footer');
get_footer();
