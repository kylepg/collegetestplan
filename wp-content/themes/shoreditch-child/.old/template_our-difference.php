<?php
/**
 * Template Name: Our Difference
 *
 * @package Shoreditch
 */

get_header(); ?>

<style>
    .entry-hero {
        background-position: bottom;
        filter: saturate(0%);
    }
</style>
<div class="entry-hero" <?php shoreditch_background_image(); ?>>
    <div class="entry-hero-wrapper">
        <div class="title-wrap">
            <h1 style="color: #fff">Our Difference</h1>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
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
                                <li data-offering="proven-methodology">
                                    Proven Methodology</li>
                                <li data-offering="our-process">
                                    Our Process</li>
                            </ul>
                        </div>
                        <div class="right">
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="proven-methodology">
                                <h3>Proven Methodology</h3>
                                <p>With COLLEGE TESTPLAN, you get the smartest approach to test prep and tutoring. Our proprietary systems uses the latest research in cognition, memory, and motivation to help students achieve a higher level of academic success.</p>

                                <h5>Start With A Clear Mission</h5>
                                <p>COLLEGE TESTPLAN was founded in 2012 by Erik Sullivan with a clear mission: develop a smarter approach to tutoring. I pride myself on my ability to provide individual, need-based tutoring, focusing on the particular problem areas of each student, be they in content, study skills, test anxiety, or motivational deficits.</p>

                                <h5>Meticulously Researched & Up-To-Date</h5>
                                <p>It’s only fair that I do my homework as well. Every year, I update my teaching methods and materials to incorporate current research in student meta-cognition, memory, test-anxiety, self efficacy, motivation, and other aspects of learning. I strive to go “beyond the content,” teaching students to study effectively, manage stress, and pace themselves on test day.</p>

                                <h5>Customize a TestPlan For Each Student</h5>
                                <p>The best advice is fully informed. I invest deeply in my relationships with the families I serve. I listen closely to parents to understand the specific needs of their children and to craft an individualized TESTPLAN for achieving our collective educational goals.</p>

                            </div>
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="our-process">
                                <h3>Our Process</h3>
                                <p>The tests are standardized. Our one-on-one tutoring is anything but.</p>

                                <p>At its core, the SAT is a reading test—even the two math sections are full of word problems and questions about experimental design. And while the ACT has a reputation as the more studentfriendly college admissions test, it requires students to be superstars at time management. For more than fifteen years, I’ve studied the ins and outs of both the SAT and the ACT and I’ve developed innovative strategies and essential tactics to help students read as effectively as possible and to help students manage time, reduce stress, and recall content. At COLLEGE TESTPLAN, I’ll customize these strategies and tactics to distinct learning styles so that students achieve—and ideally exceed—their target scores.</p>

                                <p>After an initial, complimentary Diagnostic SAT and/or Diagnostic ACT (or evaluation of previous scores), I will devise a customized TESTPLAN leading into a targeted test date that caters to a student's respective strengths, needs, schedule, and colleges of interest. These TESTPLANS are highly focused yet flexible, highly demanding yet practicable.</p>

                                <p>Our SIGNATURE TESTPLAN consists of twelve 90-minute meetings (18 hours). For a first-try SAT, four meetings (6 hours) are typically centered on Reading, four meetings (6 hours) on Writing & Language, and four meetings (6 hours) on Math. If requested, the optional SAT Essay can be incorporated. For a first-try ACT, three meetings (4.5 hours) are typically centered on English, three meetings (4.5 hours) on Math, three meetings (4.5 hours) on Reading, and three meetings (4.5 hours) on Science. If requested, the optional ACT Writing section can be incorporated. All customizable Signature TESTPLANS INCLUDE an Essential Final Review on the eve of the test ($150 value), a fully proctored Actual Conditions SAT or ACT the weekend prior to test day ($30 value), the Official SAT Study Guide ($28.99 value) or the Official ACT Prep Guide ($32.95 value), and all proprietary curriculum.</p>

                                <p>Because the SAT and the ACT are now so closely aligned, prepping for one test indirectly prepares a student for the other. Once most students are fully prepared for either the SAT or the ACT, it typically takes no more than four to six meetings (6 to 9 hours) to fully prepare for the “other” test.</p>
                            </div>
                        </div>
                    </div>

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

    function updateUrlParameter(uri, key, value) {
        // remove the hash part before operating on the uri
        var i = uri.indexOf('#');
        var hash = i === -1 ? '' : uri.substr(i);
        uri = i === -1 ? uri : uri.substr(0, i);

        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            uri = uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            uri = uri + separator + key + "=" + value;
        }
        return uri + hash; // finally append the hash as well
    }
    if (getParameterByName('o') !== null) {
        jQuery('.offering-wrap').removeClass('active');
        jQuery('.offering-wrap[data-offering="' + getParameterByName('o') + '"]').addClass('active')
        jQuery('.left li').removeClass('active');
        jQuery('li[data-offering="' + getParameterByName('o') + '"]').addClass('active')
    } else {
        jQuery('.offering-wrap').first().addClass('active')
        jQuery('li[data-offering]').first().addClass('active')
    }
    jQuery('.left li').on('click', function() {
        var offering = jQuery(this).attr('data-offering');
        var subOffering = jQuery(this).attr('data-sub-offering');
        window.history.replaceState('test', 'test', `?o=${offering}`);
        jQuery('.left li').removeClass('active');
        jQuery('.offering-wrap').removeClass('active');
        jQuery('[data-offering="' + offering + '"]').addClass('active');
        jQuery('html,body').animate({
            scrollTop: jQuery('[data-sub-offering="' + offering + '_' + subOffering + '"]').offset().top - 50
        }, 'slow');
    });


    // jQuery(window).on('scroll', () => {
    //     let scrolled = jQuery(document).scrollTop();
    //     console.log(scrolled);
    //     if (scrolled >= 495) {
    //         jQuery('.left ul').css({
    //             'position': 'fixed',
    //             'top': '40px'
    //         });
    //     }
    //     if (scrolled < 495) {
    //         jQuery('.left ul').css({
    //             'position': 'relative',
    //             'top': '0px'
    //         });
    //     }
    // });
</script>
<?php
get_sidebar('footer');
get_footer();
