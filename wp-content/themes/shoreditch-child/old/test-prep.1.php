<?php
/**
 * Template Name: Test Prep
 *
 * @package Shoreditch
 */

get_header(); ?>

<?php
    while (have_posts()) : the_post();

        get_template_part('template-parts/content', 'offerings-hero');

    endwhile; // End of the loop.
    ?>

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
                                <li class="active" data-offering="SAT Prep">
                                    SAT Prep
                                    <ul>
                                        <li>Overview</li>
                                        <li>Customizable TestPlan Packages</li>
                                        <li>Small-Group Classes</li>
                                        <li>Actual Conditions SATs</li>
                                        <li>Essential Final Reviews</li>
                                    </ul>
                                </li>
                                <li data-offering="group">
                                    ACT Prep
                                    <ul>
                                        <li>Overview</li>
                                        <li>Customizable TestPlan Packages</li>
                                        <li>Small-Group Classes</li>
                                        <li>Actual Conditions ACTs</li>
                                        <li>Essential Final Reviews</li>
                                    </ul>
                                </li>
                                <li data-offering="essays">
                                    Graduate Entrance Exams</li>
                                <li data-offering="academic-services">
                                    High School Entrance Exams</li>
                                <li data-offering="academic-services">
                                    AP Courses & Exams</li>
                                <li data-offering="academic-services">
                                    PSAT</li>
                                <li data-offering="academic-services">
                                    SAT Subject Tests</li>
                                <li data-offering="academic-services">
                                    Practice Exams</li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="offering-wrap active" data-offering="SAT Prep">
                                <h3>SAT Prep</h3>
                                <h5>Private Tutoring</h5>
                                <p>The tests are standardized. Our one-on-one tutoring is anything but.</p>

                                <p>After an initial, complimentary Diagnostic SAT (or evaluation of previous scores), I will devise a
                                    customized TESTPLAN leading into a targeted test date that caters to a student's respective
                                    strengths, needs, schedule, and colleges of interest. These TESTPLANS are highly focused yet
                                    flexible, highly demanding yet practicable.
                                </p>
                                <p>Our SIGNATURE TESTPLAN consists of twelve 90-minute meetings (18 hours). For a first-try
                                    SAT, four meetings (6 hours) are typically centered on Reading, four meetings (6 hours) on
                                    Writing & Language, and four meetings (6 hours) on Math. If requested, the optional SAT Essay
                                    can be incorporated. All customizable Signature TESTPLANS INCLUDE an Essential Final
                                    Review on the eve of the test ($150 value), a fully proctored Actual Conditions SAT the weekend
                                    prior to test day ($30 value), the Official SAT Study Guide ($28.99 value), and all proprietary
                                    curriculum.</p>
                                <p>Because the SAT and the ACT are now so closely aligned, prepping for one test indirectly
                                    prepares a student for the other. Once most students are fully prepared for either the SAT or the
                                    ACT, it typically takes no more than four to six meetings (6 to 9 hours) to fully prepare for the
                                    “other” test.
                                </p>

                                <h5>Semi-Private Tutoring</h5>
                                <p>
                                    Same as the above except in a semi-private environment of two,
                                    three, or four students. Ideal for siblings, friends, and teammates who share comparable
                                    baseline numbers. At COLLEGE TESTPLAN, parents and/or students themselves typically initiate
                                    and arrange most semi-private tutoring.
                                </p>
                                <div class="target-wrap" data-target="sat-prep-customizable-testplan-packages">
                                    <h4>Customizable TestPlan Packages</h4>
                                    <p>Private & Semi-Private</p>
                                    <div class="item-wrap">
                                        <h4><span><span>SIGNATURE</span> TestPlan</span> <span>2090/student</span></h4>
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
                                        <h4><span><span>SIGNATURE+</span> TestPlan</span> <span>3490/student</span></h4>
                                        <p>Ideal for the student looking to “pursue perfection” and to earn admissions-altering
                                            score increases PLUS prepare for a second test PLUS receive assistance with
                                            Admissions Matters. Forty-two total hours (not including weekly homework
                                            assignments). Package sessions can be used for any combination of test preparation,
                                            admissions matters, or academic enrichment.</p>
                                        <ul>
                                            <li>Twenty 90-minute tutorials (30 hours)</li>
                                            <li>Two Essential Final Reviews (4 hours)</li>
                                            <li>Two Actual Conditions SATs or ACTs or one of each (8 hours)</li>
                                        </ul>
                                    </div>
                                    <div class="item-wrap">
                                        <h4><span><span>Targeted</span> TestPlan</span> <span>1190/student</span></h4>
                                        <p>Ideal for the student with specific needs and with target scores just out of
                                            reach. Fifteen total hours (not including weekly homework assignments). Package
                                            sessions can be used for any combination of test preparation, admissions
                                            matters, or academic enrichment.</p>
                                        <ul>
                                            <li>Six 90-minute sessions (9 hours)</li>
                                            <li>Essential Final Review (2 hours)</li>
                                            <li>Actual Conditions SAT or ACT (4 hours)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>Small Group Offerings</h3>
                            <h4>Courses, Reviews, Exams</h4>
                            <div class="item-wrap">
                                <h4><span><span>SIGNATURE</span> SERIES</span> <span>790/student</span></h4>
                                <p>Our six-week Signature Series is ideal for mid-range scoring students who thrive in small,
                                    interactive settings. Research shows that students master skills faster and retain
                                    them longer when they are actively involved in the learning process. Our Signature
                                    Series—capped at 10 students—is designed to engage. This interactive environment
                                    provides an opportunity to tackle tough questions outside therange of a standard
                                    SAT or ACT classroom curriculum.
                                </p>
                                <ul>
                                    <li>Twenty-one hours of classroom instruction centered on core content, personalized
                                        strategies, and proven “tactics” (not tricks) from COLLEGE TESTPLAN’s SAT Essentials
                                        or ACT Essentials</li>
                                    <li>Weekly homework assignments derived from our comprehensive Self-Study Plans</li>
                                    <li>Access to unlimited practice tests</li>
                                    <li>Fully proctored Actual Conditions SAT or ACT the weekend prior to test day</li>
                                    <li>Comprehensive Essential Final Review on the eve of the test</li>
                                </ul>
                                <p class="date-title">Signature Series for August SAT</p>
                                <p>Mondays (6:00 to 8:30 PM) on 7/16, 7/23, 7/30, 8/6, 8/13 & 8/20</p>

                                <p class="date-title">Signature Series for September ACT</p>
                                <p>Tuesdays (6:00 to 8:30 PM) on 7/31, 8/7, 8/14, 8/21, 8/28 & 9/4</p>

                                <p class="date-title">Signature Series for December SAT</p>
                                <p>Saturdays (9:00 to 11:30 AM) on 10/13, 10/20, 10/27, 11/3, 11/10 & 11/17</p>

                                <p class="date-title">Signature Series for December ACT</p>
                                <p>Thursdays (6:30 to 9:00 PM) on 10/25, 11/1, 11/8, 11/15, 11/29 & 12/6</p>


                            </div>
                            <div class="item-wrap">
                                <h4><span><span>ESSENTIAL</span> PRIMER</span> <span>490/student</span></h4>
                                <p>Our four-week Essential Primer is ideal for mid-range scoring students and mid-range
                                    striving students who desire a comprehensive yet time efficient overview of core
                                    content, general strategies, and essential tactics.</p>
                                <ul>
                                    <li>Sixteen hours of classroom instruction centered on core content, personalized strategies,
                                        and proven “tactics” (not tricks) from COLLEGE TESTPLAN’s SAT Essentials or ACT
                                        Essentials
                                    </li>
                                    <li>Weekly homework assignments derived from our comprehensive Self-Study Plans</li>
                                    <li>Access to unlimited practice tests</li>
                                    <li>Fully proctored Actual Conditions SAT or ACT the weekend prior to test day</li>
                                    <li>Comprehensive Final Review on the eve of the test</li>
                                </ul>
                                <p class="date-title">Essential Primer for October SAT</p>
                                <p>Thursdays (6:30 to 9:00 PM) on 9/6, 9/13, 9/20 & 9/27</p>

                                <p class="date-title">Essential Primer for October ACT</p>
                                <p>Thursdays (6:30 to 8:30 PM) on 10/4, 10/11, 10/18 & 10/25</p>

                                <p class="date-title">Essential Primer for November SAT</p>
                                <p>Thursdays (6:30 to 8:30 PM) on 10/11, 10/18, 10/25 & 11/1</p>
                            </div>
                            <div class="item-wrap">
                                <h4><span><span>ESSENTIAL</span> FINAL REVIEW - SAT</span> <span>150/student</span></h4>
                                <p>A comprehensive two-hour group review of Reading, Writing & Language, Math, and the Essay
                                    designed for students who desire one final “walk through” before test day. All major
                                    content, concepts, and problem solving methods necessary to succeed on the SAT will
                                    be covered. These reviews are ideal for all students, even those not already enrolled
                                    in private or group tutoring. During these comprehensive reviews, students will .
                                    . .</p>
                                <ul>
                                    <li>Review all strategic and tactical approaches to Reading, Writing & Language, and
                                        Math questions via excerpts from COLLEGE TESTPLAN’s SAT Essentials</li>
                                    <li>Hone timing, reading, and reasoning on varied question sets</li>
                                    <li>Briefly address COLLEGE TESTPLAN’s “How to Write the SAT Essay”</li>
                                    <li>And address—in detail—our “essential” test day checklist</li>
                                </ul>
                                <p class="date-title">Essential Final Review for August SAT</p>
                                <p>Thursday, August 23 (6:00 to 8:00 PM)</p>

                                <p class="date-title">Essential Final Review for October SAT</p>
                                <p>Friday, October 5 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for November SAT</p>
                                <p>Friday, November 2 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for December SAT</p>
                                <p>Friday, November 30 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for March SAT</p>
                                <p>Friday, March 8 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for May SAT</p>
                                <p>Friday, May 3 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for June SAT</p>
                                <p>Friday, May 31 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                            </div>


                            <div class="item-wrap">
                                <h4><span><span>ESSENTIAL</span> FINAL REVIEW - ACT</span> <span>150/student</span></h4>
                                <p>A comprehensive two-hour group review of English, Math, Reading, Science, and Writing
                                    designed for students who desire one final “walk through” before test day. All major
                                    content, concepts, and problem solving methods necessary to succeed on the ACT will
                                    be covered. These reviews are ideal for all students, even those not already enrolled
                                    in private or group tutoring. During these comprehensive reviews, students will .
                                    . .</p>
                                <ul>
                                    <li>Review all strategic and tactical approaches to English, Math, Reading, and Science
                                        questions via excerpts from COLLEGE TESTPLAN’s ACT Essentials</li>
                                    <li>Hone timing, reading, and reasoning on varied question sets</li>
                                    <li>Briefly address COLLEGE TESTPLAN’s “Writing ACT Writing”</li>
                                    <li>And address—in detail—our “essential” test day checklist</li>
                                </ul>
                                <p class="date-title">Essential Final Review for July ACT</p>
                                <p>Friday, July 13 (4:00 to 6:00 PM)</p>

                                <p class="date-title">Essential Final Review for September ACT</p>
                                <p>Friday, September 7 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for October ACT</p>
                                <p>Friday, October 26 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for December ACT</p>
                                <p>Friday, December 7 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for February ACT</p>
                                <p>Friday, February 8 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for April ACT</p>
                                <p>Friday, April 12 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>

                                <p class="date-title">Essential Final Review for June ACT</p>
                                <p>Friday, June 7 (4:00 to 6:00 PM & 6:30 to 8:30 PM)</p>
                            </div>


                            <div class="item-wrap">
                                <h4><span><span>ACTUAL</span> FINAL REVIEW -- SAT</span> <span>490/student</span></h4>
                                <p>Taking the SAT and the ACT under Actual Conditions is a great way to boost skills and
                                    to test new strategies and essential tactics. Our Actual Conditions testing provides
                                    students with the invaluable opportunity to hone pacing, to fine-tune analytical
                                    skills, and to strengthen strategic guessing. Although students can achieve some
                                    of these objectives by completing tests at home or online, taking the SAT or the
                                    ACT under Actual Conditions documents student performance without equivocation and
                                    familiarizes and desensitizes students to the “act” of taking standardized tests
                                    in a classroom setting.</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Saturday, July 7 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Saturday, August 18 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Saturday, September 1 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Saturday, September 29 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Saturday, October 20 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Sunday, October 27 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Saturday, November 24 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Saturday, December 1 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Saturday, February 2 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Saturday, March 2 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Saturday, April 6 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Sunday, April 27 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions SAT</p>
                                <p>Saturday, May 25 (9:00 AM to 12:30 PM)</p>
                                <p class="date-title">Actual Conditions ACT</p>
                                <p>Sunday, June 1 (9:00 AM to 12:30 PM)</p>
                            </div>
                            <div class="offering-wrap" data-offering="essays">
                                <h3>Application Essays</h3>
                                <div class="item-wrap">
                                    <h4><span><span>ESSAYS</span> THAT MATTER</span> <span>590/student</span></h4>
                                    <p>For the Common or Coalition Application Essay, no one pedagogical approach fits all.
                                        Some students need to be walked through the entire process step-by-step: from brainstorming
                                        and mapping to drafting and refining to inputting and uploading content onto the
                                        application itself. Other students only need a diverse set of templates and an experienced
                                        proofreader. A handful of students simply need to fully understand the assignment
                                        and to be pushed in the best direction.
                                        <br>
                                        <br> At COLLEGE TESTPLAN, we typically start our comprehensive Essays That Matter package
                                        with a 90-minute meeting during which we overview the writing assignment and emphasize
                                        the need to “control the argument” and to “direct the takeaways.” We also address
                                        what college admissions officers typically embrace and what they regularly shun.
                                        We discuss what to do and—more importantly—what not to do. At COLLEGE TESTPLAN, all
                                        students will critically read at least two dozen actual Common and Coalition Application
                                        Essays (some strong, some not so strong).
                                        <br>
                                        <br> After that initial meeting, students will read through the supplemental materials
                                        provided and then brainstorm their “takeaways”—the characteristics, values, likes,
                                        dislikes, passions, talents, idiosyncrasies—they wish to showcase. Students will
                                        then brainstorm potential “vehicles”—experiences they have had, places they have
                                        been, people they have met, successes they have achieved, losses they have endured—that
                                        showcase these prioritized takeaways. Once done, we typically sit down together again
                                        to select and to map out a vehicle or two.
                                        <br>
                                        <br> From that point, we will go back and forth via Google Docs—writing, editing, refining.
                                        For most students, the most challenging part of the process is deciding upon their
                                        takeaways and then selecting the best vehicle to showcase those takeaways. Once those
                                        decisions are made, however, the pieces typically write themselves—with the proper
                                        guidance, of course.
                                        <br>
                                        <br> We will then do a final proof of the Common or Coalition Application Essay—and often
                                        the application itself— prior to submission.
                                        <br>
                                        <br> In the end, we are often looking at two physical 90-minute meetings and then the
                                        final proof. Everything else will be conducted online or via FaceTime/Skype. If a
                                        third physical meeting is necessary to finalize the Common or Coalition Application
                                        Essay, there is no additional charge.</p>
                                </div>
                            </div>
                            <div class="offering-wrap" data-offering="academic-services">
                                <h3>Additional Academic Services</h3>
                                <h4>Academic Year 2018-19</h4>
                                <div class="item-wrap">
                                    <h4><span><span>ADMISSIONS</span> MATTERS</span>
                                    </h4>
                                    <ul>
                                        <li>College Consulting & College Selection</li>
                                        <li>Common Application</li>
                                        <li>Application Essays</li>
                                        <li>Supplemental Essays</li>
                                        <li>Mock Interviews</li>
                                    </ul>
                                </div>
                                <div class="item-wrap">
                                    <h4><span><span>AP</span> COURSES & EXAMS</span>
                                    </h4>
                                    <ul>
                                        <li>Biology</li>
                                        <li>English Language & Composition</li>
                                        <li>English Literature & Composition</li>
                                        <li>Statistics</li>
                                        <li>United States Government & Politics</li>
                                        <li>United States History</li>
                                        <li>World History</li>
                                    </ul>
                                </div>
                                <div class="item-wrap">
                                    <h4><span><span>ACADEMIC</span> ENRICHMENT</span>
                                    </h4>
                                    <ul>
                                        <li>Academic Writing Skills</li>
                                        <li>Homework Help</li>
                                    </ul>
                                </div>
                                <div class="item-wrap">
                                    <h4><span><span>HIGH SCHOOL</span> ENTRANCE EXAMS</span>
                                    </h4>
                                    <ul>
                                        <li>High School Placement Test (HSPT)</li>
                                        <li>Independent School Entrance Exam (ISEE)</li>
                                        <li>Secondary School Admission Test (SSAT)</li>
                                    </ul>
                                </div>
                                <div class="item-wrap">
                                    <h4><span><span>GRADUATE</span> ENTRANCE EXAMS</span>
                                    </h4>
                                    <ul>
                                        <li>Graduate Management Admission Test (GMAT)</li>
                                        <li>Graduate Record Examination (GRE)</li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
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
        console.log('query');
        jQuery('.offering-wrap').removeClass('active');
        jQuery('.offering-wrap[data-offering="' + getParameterByName('o') + '"]').addClass('active')
        jQuery('.left li').removeClass('active');
        jQuery('li[data-offering="' + getParameterByName('o') + '"]').addClass('active')
    }
    jQuery('.left li').on('click', function() {
        var offering = jQuery(this).attr('data-offering');
        window.history.replaceState('test', 'test', `?o=${offering}`);
        jQuery(this).siblings().removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.offering-wrap').removeClass('active');
        jQuery('.offering-wrap[data-offering="' + offering + '"]').addClass('active')
    })
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
