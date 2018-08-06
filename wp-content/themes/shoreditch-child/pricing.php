<?php
/**
 * Template Name: Pricing
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
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class();
            ?> >
            <div class="hentry-wrapper">
                <?php if (! has_post_thumbnail()) : ?>
                <header class="entry-header" <?php shoreditch_background_image(); ?>>
                    <div class="entry-header-wrapper">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </div>
                    <!-- .entry-header-wrapper -->
                </header>
                <!-- .entry-header -->
                <?php endif; ?>

                <div class="entry-content">


                    <!-- TABLE  -->
                    <table class="table-lg">
                        <tbody>
                            <tr>
                                <td colspan="2">PRIVATE TUTORING</td>
                                <td>$140/hr</td>
                                <td colspan="2">210/90-minute session</td>
                            </tr>

                            <tr>
                                <td colspan="2">SEMI-PRIVATE TUTORING</td>
                                <td>$160/hr</td>
                                <td colspan="2">80/hr two students, 53/hr three, etc.</td>
                            </tr>
                            <tr>
                                <td colspan="2">SIGNATURE TESTPLAN</td>
                                <td>$2090</td>
                                <td colspan="2">custom, pre-paid, discount package</td>
                            </tr>
                            <tr>
                                <td colspan="2">SIGNATURE+ TESTPLAN</td>
                                <td>$3490</td>
                                <td colspan="2">custom, pre-paid, discount package</td>
                            </tr>
                            <tr>
                                <td colspan="2">TARGETED TESTPLAN</td>
                                <td>$1190</td>
                                <td colspan="2">custom, pre-paid, discount package</td>
                            </tr>
                            <tr>
                                <td colspan="2">SIGNATURE GROUP SERIES</td>
                                <td>$790/student</td>
                                <td colspan="2">8 meetings, 21 hours</td>
                            </tr>
                            <tr>
                                <td colspan="2">ESSENTIAL GROUP PRIMER</td>
                                <td>$540/student</td>
                                <td colspan="2">6 meetings, 16 hours</td>
                            </tr>
                            <tr>
                                <td colspan="2">ESSENTIAL FINAL REVIEW</td>
                                <td>$150/student</td>
                                <td colspan="2">1 meeting, 2 hours</td>
                            </tr>
                            <tr>
                                <td colspan="2">ACTUAL CONDITIONS EXAMS</td>
                                <td>$30/student</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2">ESSAYS THAT MATTER</td>
                                <td>$590/student</td>
                                <td colspan="2"></td>
                            </tr>

                        </tbody>
                    </table>

                    <!-- TABLE SMALL -->
                    <table class="table-sm">
                        <tbody>
                            <tr>
                                <td style="border: 0; padding-top: 10px" colspan="3">PRIVATE TUTORING</td>
                            </tr>
                            <tr>
                                <td>$140/hr</td>
                                <td colspan="2">210/90-minute session</td>
                            </tr>

                            <tr>
                                <td style="border: 0; padding-top: 10px" colspan="3">SEMI-PRIVATE TUTORING</td>
                            </tr>
                            <tr>
                                <td>160/hr</td>
                                <td colspan="2">80/hr two students, 53/hr three, etc.</td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="content-wrap">
                        <p>The Signature Group Series, the Essential Group Primer, and all pre-paid TESTPLANS
                            <strong>INCLUDE</strong> an Essential Final Review on the eve of the test ($150 value), a fully proctored
                            Actual Conditions SAT or ACT the weekend prior to test day ($30 value), the Official SAT Study
                            Guide ($28.99 value) or the Official ACT Prep Guide ($32.95 value), and all proprietary curriculum.
                        </p>
                        <ul>
                            <li>All pre-paid packages and all group offerings must be paid in full prior to the first meeting
                                via cash, check, or credit card.</li>
                            <li>All non-pre-paid private and semi-private sessions may be paid in advance or session by session
                                via cash, check, or credit card.</li>
                            <li>Unless otherwise agreed upon, all private and semi-private sessions and all group offerings will
                                be conducted on site at COLLEGE TESTPLAN, 100 TradeCenter, Suite G-700, Woburn, MA 01801.</li>
                            <li>Detailed directions to COLLEGE TESTPLAN—including pictures—are on the following page.</li>
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
