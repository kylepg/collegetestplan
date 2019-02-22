<?php
/**
 * Template Name: Admissions Matters
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
            <h1 style="color: #fff">Admissions Matters</h1>
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
                                <li data-offering="college-consulting-and-selection">
                                    College Consulting & Selection</li>
                                <li data-offering="essays-that-matter">
                                    Essays That Matter</li>
                            </ul>
                        </div>
                        <div class="right">
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="college-consulting-and-selection">
                                <h3>College Consulting & Selection</h3>
                            </div>
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="essays-that-matter">
                                <h3>Essays That Matter</h3>
                                <div class="item-wrap">
                                    <h4><span><span>ESSAYS</span> THAT MATTER</span> <span>590/student</span></h4>
                                    <p>For the Common or Coalition Application Essay, no one pedagogical approach fits all. Some students need to be walked through the entire process step-by-step: from brainstorming and mapping to drafting and refining to inputting and uploading content onto the application itself. Other students only need a diverse set of templates and an experienced proofreader. A handful of students simply need to fully understand the assignment and to be pushed in the best direction. <br> <br> At COLLEGE TESTPLAN, we typically start our comprehensive Essays That Matter package with a 90-minute meeting during which we overview the writing assignment and emphasize the need to “control the argument” and to “direct the takeaways.” We also address what college admissions officers typically embrace and what they regularly shun. We discuss what to do and—more importantly—what not to do. At COLLEGE TESTPLAN, all students will critically read at least two dozen actual Common and Coalition Application Essays (some strong, some not so strong). <br> <br> After that initial meeting, students will read through the supplemental materials provided and then brainstorm their “takeaways”—the characteristics, values, likes, dislikes, passions, talents, idiosyncrasies—they wish to showcase. Students will then brainstorm potential “vehicles”—experiences they have had, places they have been, people they have met, successes they have achieved, losses they have endured—that showcase these prioritized takeaways. Once done, we typically sit down together again to select and to map out a vehicle or two. <br> <br> From that point, we will go back and forth via Google Docs—writing, editing, refining. For most students, the most challenging part of the process is deciding upon their takeaways and then selecting the best vehicle to showcase those takeaways. Once those decisions are made, however, the pieces typically write themselves—with the proper guidance, of course. <br> <br> We will then do a final proof of the Common or Coalition Application Essay—and often the application itself— prior to submission. <br> <br> In the end, we are often looking at two physical 90-minute meetings and then the final proof. Everything else will be conducted online or via FaceTime/Skype. If a third physical meeting is necessary to finalize the Common or Coalition Application Essay, there is no additional charge.</p>
                                </div>
                            </div>
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
