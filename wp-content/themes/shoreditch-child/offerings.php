<?php
/**
 * Template Name: Offerings
 *
 * @package Shoreditch
 */

get_header(); ?>

<?php
    while (have_posts()) : the_post();

        get_template_part('template-parts/content', 'offerings-hero');

    endwhile; // End of the loop.
    ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z"
    crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6"
    crossorigin="anonymous">
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class();
            ?>>
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
                    <div class="content-wrap">
                        <div class="left">
                            <ul>
                                <li class="active" data-offering="private">
                                    <i class="fas fa-user"></i>Private Tutoring
                                </li>
                                <li data-offering="group">
                                    <i class="fas fa-users"></i>Small Group Offerings</li>
                                <li data-offering="essays">
                                    <i class="fas fa-file-alt"></i>Application Essays</li>
                                <li data-offering="academic-services">
                                    <i class="fas fa-graduation-cap"></i>Academic Services</li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="offering-wrap active" data-offering="private">
                                <h3>Private & Semi-Private Tutoring</h3>
                                <p>The tests are standardized. Our one-on-one tutoring is anything but.</p>

                                <p>At its core, the SAT is a reading test—even the two math sections are full of word problems
                                    and questions about experimental design. And while the ACT has a reputation as the more
                                    student-friendly college admissions test, it requires students to be superstars at time
                                    management.
                                </p>
                                <p>For more than fifteen years, I’ve studied the ins and outs of both the SAT and the ACT and
                                    I’ve developed innovative strategies and essential tactics to help students read as effectively
                                    as possible and to help students manage time, reduce stress, and recall content. </p>
                                <p>At COLLEGE TESTPLAN, I’ll customize these strategies and tactics to distinct learning styles
                                    so that students achieve—and ideally exceed—their target scores. After an initial, complimentary
                                    Diagnostic SAT and/or Diagnostic ACT (or evaluation of previous scores), I will devise
                                    a customized TESTPLAN leading into a targeted test date that caters to a student’s respective
                                    strengths, needs, schedule, and colleges of interest. These TESTPLANS are highly focused
                                    yet flexible, highly demanding yet practicable.
                                </p>
                                <h4>Customizable TestPlan Packages</h4>
                                <div class="item-wrap">
                                    <h4><span><span>SIGNATURE</span> TestPlan</span> <span>$600+ Savings</span></h4>
                                    <p>Ideal for the student looking to “pursue perfection” and to earn admissions-altering
                                        score increases. Twenty-four total hours (not including weekly homework assignments).
                                        Package sessions can be used for any combination of test preparation, admissions
                                        matters, or academic enrichment.</p>
                                    <ul>
                                        <li>Twelve 90-minute tutorials (18 hours)</li>
                                        <li>Essential Final Review (2 hours)</li>
                                        <li>Actual Conditions SAT or ACT (4 hours)</li>
                                    </ul>
                                </div>
                                <div class="item-wrap">
                                    <h4><span><span>SIGNATURE+</span> TestPlan</span> <span>$1000+ Savings</span></h4>
                                    <p>Ideal for the student looking to “pursue perfection” and to earn admissions-altering
                                        score increases PLUS prepare for a second test PLUS receive assistance with Admissions
                                        Matters. Forty-two total hours (not including weekly homework assignments). Package
                                        sessions can be used for any combination of test preparation, admissions matters,
                                        or academic enrichment.</p>
                                    <ul>
                                        <li>Twenty 90-minute tutorials (30 hours)</li>
                                        <li>Two Essential Final Reviews (4 hours)</li>
                                        <li>Two Actual Conditions SATs or ACTs or one of each (8 hours)</li>
                                    </ul>
                                </div>
                                <div class="item-wrap">
                                    <h4><span><span>Targeted</span> TestPlan</span> <span>$250+ Savings</span></h4>
                                    <p>Ideal for the student with specific needs and with target scores just out of reach. Fifteen
                                        total hours (not including weekly homework assignments). Package sessions can be
                                        used for any combination of test preparation, admissions matters, or academic enrichment.</p>
                                    <ul>
                                        <li>Six 90-minute sessions (9 hours)</li>
                                        <li>Essential Final Review (2 hours)</li>
                                        <li>Actual Conditions SAT or ACT (4 hours)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="offering-wrap" data-offering="group">Group Offerings</div>
                            <div class="offering-wrap" data-offering="essays">essays</div>
                            <div class="offering-wrap" data-offering="academic-services">academic services</div>
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
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
    if (getParameterByName('o') !== null) {
        console.log('query');
        jQuery('.offering-wrap').removeClass('active');
        jQuery('.offering-wrap[data-offering="' + getParameterByName('o') + '"]').addClass('active')
        jQuery('.left li').removeClass('active');
        jQuery('li[data-offering="' + getParameterByName('o') + '"]').addClass('active')
    }
    jQuery('.left li').on('click', function() {
        console.log('yo');
        var offering = jQuery(this).attr('data-offering');
        jQuery(this).siblings().removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.offering-wrap').removeClass('active');
        jQuery('.offering-wrap[data-offering="' + offering + '"]').addClass('active')
    })
</script>
<?php
get_sidebar('footer');
get_footer();
