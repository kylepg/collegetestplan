<?php
/**
 * Template Name: Academic Tutoring
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
            <h1 style="color: #fff">Academic Tutoring</h1>
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
                                <li data-offering="academic-writing-skills">
                                    Academic Writing Skills</li>
                                <li data-offering="homework-help">
                                    Homework Help</li>
                            </ul>
                        </div>
                        <div class="right">
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="academic-writing-skills">
                                <h3>Academic Writing Skills</h3>
                            </div>
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="homework-help">
                                <h3>Homework Help</h3>
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
