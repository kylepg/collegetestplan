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
                                <li data-offering="sat-prep">SAT Prep</li>
                                <ul data-offering="sat-prep">
                                    <li data-offering="sat-prep" data-sub-offering="schedule">Schedule</li>
                                    <li data-offering="sat-prep" data-sub-offering="customizable-testplan-packages">Customizable TestPlan Packages</li>
                                    <li data-offering="sat-prep" data-sub-offering="small-group-classes">Small-Group Classes</li>
                                    <li data-offering="sat-prep" data-sub-offering="actual-conditions-sats">Actual Conditions SATs</li>
                                    <li data-offering="sat-prep" data-sub-offering="essential-final-reviews">Essential Final Reviews</li>
                                </ul>
                                <li data-offering="act-prep">ACT Prep</li>
                                <ul data-offering="act-prep">
                                    <li data-offering="act-prep" data-sub-offering="schedule">Schedule</li>
                                    <li data-offering="act-prep" data-sub-offering="customizable-testplan-packages">Customizable TestPlan Packages</li>
                                    <li data-offering="act-prep" data-sub-offering="small-group-classes">Small-Group Classes</li>
                                    <li data-offering="act-prep" data-sub-offering="actual-conditions-acts">Actual Conditions ACTs</li>
                                    <li data-offering="act-prep" data-sub-offering="essential-final-reviews">Essential Final Reviews</li>
                                </ul>
                                <li data-offering="practice-exams">
                                    Practice Exams</li>
                                <li data-offering="sat-subject-tests">
                                    SAT Subject Tests</li>
                                <li data-offering="psat">
                                    PSAT</li>
                                <li data-offering="ap-courses-and-exams">
                                    AP Courses & Exams</li>
                                <li data-offering="high-school-entrance-exams">
                                    High School Entrance Exams</li>
                                <li data-offering="graduate-entrance-exams">
                                    Graduate Entrance Exams</li>
                            </ul>
                        </div>
                        <div class="right">
                            <!-- - SAT Prep - -->
                            <div class="offering-wrap" data-offering="sat-prep">
                                <h3>SAT Prep</h3>
                                <!-- * OVERVIEW * -->
                                <div class="sub-offering-wrap" data-sub-offering="sat-prep_overview">
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
                                </div>
                                <div class="sub-offering-wrap" data-sub-offering="sat-prep_customizable-testplan-packages">
                                    <!-- * CUSTOMIZABLE TESTPLAN PACKAGES * -->
                                    <h4>Customizable TestPlan Packages</h4>
                                    <p>Private & Semi-Private</p>
                                    <div class="item-wrap">
                                        <h4><span><span>SIGNATURE</span> TestPlan</span> <span>2190/student</span></h4>
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
                                        <h4><span><span>SIGNATURE+</span> TestPlan</span> <span>3790/student</span></h4>
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
                                <!-- * SMALL-GROUP CLASSES * -->
                                <div class="sub-offering-wrap" data-sub-offering="sat-prep_small-group-classes">
                                    <h4>Small-Group Classes</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>SIGNATURE</span> SERIES</span> <span>790/student</span></h4>
                                        <p>Our six-week Signature Series is ideal for mid-range scoring students who thrive in small, interactive settings.
                                            Research shows that students master skills faster and retain them longer when they are actively involved in the
                                            learning process. Our Signature Series—capped at 10 students—is designed to engage. This interactive environment
                                            provides an opportunity to tackle tough questions outside the range of a standard SAT classroom curriculum.
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
                                    </div>
                                    <div class="item-wrap">
                                        <h4><span><span>ESSENTIAL</span> PRIMER</span> <span>490/student</span></h4>
                                        <p>Our four-week Essential Primer is ideal for mid-range scoring students and mid-range striving students who desire a
                                            comprehensive yet time efficient overview of core content, general strategies, and essential tactics.</p>
                                        <ul>
                                            <li>Sixteen hours of classroom instruction centered on core content, personalized strategies,
                                                and proven “tactics” (not tricks) from COLLEGE TESTPLAN’s SAT Essentials or ACT
                                                Essentials
                                            </li>
                                            <li>Weekly homework assignments derived from our comprehensive Self-Study Plans</li>
                                            <li>Access to unlimited practice tests</li>
                                            <li>Fully proctored Actual Conditions SAT the weekend prior to test day</li>
                                            <li>Comprehensive Final Review on the eve of the test</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- * ACTUAL CONDITIONS SATs * -->
                                <div class="sub-offering-wrap" data-sub-offering="sat-prep_actual-conditions-sats">
                                    <h4>Actual Conditions SATs</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>ACTUAL CONDITIONS</span> EXAMS</span> <span>30/student</span></h4>
                                        <p>Taking the SAT under Actual Conditions is a great way to boost skills and to test new strategies and essential tactics.
                                            Our Actual Conditions testing provides students with the invaluable opportunity to hone pacing, to fine-tune
                                            analytical skills, and to strengthen strategic guessing. Although students can achieve some of these objectives by
                                            completing tests at home or online, taking the SAT under Actual Conditions documents student performance
                                            without equivocation and familiarizes and desensitizes students to the “act” of taking standardized tests in a
                                            classroom setting. If desired, the optional SAT Essay can be incorporated upon request.</p>
                                    </div>
                                </div>
                                <!-- * ESSENTIAL FINAL REVIEWS * -->
                                <div class="sub-offering-wrap" data-sub-offering="sat-prep_essential-final-reviews">
                                    <h4>Essential Final Reviews</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>ESSENTIAL</span> FINAL REVIEW - SAT</span> <span>150/student</span></h4>
                                        <p>A comprehensive two-hour group review of Reading, Writing & Language, Math, and the Essay designed for
                                            students who desire one final “walk through” before test day. All major content, concepts, and problem solving
                                            methods necessary to succeed on the SAT will be covered. These reviews are ideal for all students, even those not
                                            already enrolled in private or group tutoring. During these comprehensive reviews, students will . .</p>
                                        <ul>
                                            <li>Review all strategic and tactical approaches to Reading, Writing & Language, and Math questions via
                                                excerpts from COLLEGE TESTPLAN’s SAT Essentials</li>
                                            <li>Hone timing, reading, and reasoning on varied question sets</li>
                                            <li>Briefly address COLLEGE TESTPLAN’s “How to Write the SAT Essay”</li>
                                            <li>And address—in detail—our “essential” test day checklist</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- - ACT Prep - -->
                            <div class="offering-wrap" data-offering="act-prep">
                                <h3>ACT Prep</h3>
                                <!-- * OVERVIEW * -->
                                <div class="sub-offering-wrap" data-sub-offering="act-prep_overview">
                                    <h5>Private Tutoring</h5>
                                    <p>The tests are standardized. Our one-on-one tutoring is anything but.</p>

                                    <p>After an initial, complimentary Diagnostic ACT (or evaluation of previous scores), I will devise a
                                        customized TESTPLAN leading into a targeted test date that caters to a student's respective
                                        strengths, needs, schedule, and colleges of interest. These TESTPLANS are highly focused yet
                                        flexible, highly demanding yet practicable.</p>
                                    <p>Our SIGNATURE TESTPLAN consists of twelve 90-minute meetings (18 hours). For a first-try
                                        ACT, three meetings (4.5 hours) are typically centered on English, three meetings (4.5 hours) on
                                        Math, three meetings (4.5 hours) on Reading, and three meetings (4.5 hours) on Science. If
                                        requested, the optional ACT Writing section can be incorporated. All customizable Signature
                                        TESTPLANS INCLUDE an Essential Final Review on the eve of the test ($150 value), a fully
                                        proctored Actual Conditions ACT the weekend prior to test day ($30 value), the Official ACT Prep
                                        Guide ($32.95 value), and all proprietary curriculum.</p>
                                    <p>Because the SAT and the ACT are now so closely aligned, prepping for one test indirectly
                                        prepares a student for the other. Once most students are fully prepared for either the SAT or the
                                        ACT, it typically takes no more than four to six meetings (6 to 9 hours) to fully prepare for the
                                        “other” test.</p>

                                    <h5>Semi-Private Tutoring</h5>
                                    <p>Same as the above except in a semi-private environment of two, three, or four students. Ideal for
                                        siblings, friends, and teammates who share comparable baseline numbers. At COLLEGE
                                        TESTPLAN, parents and/or students themselves typically initiate and arrange most semi-private
                                        tutoring.</p>
                                </div>
                                <div class="sub-offering-wrap" data-sub-offering="act-prep_customizable-testplan-packages">
                                    <!-- * CUSTOMIZABLE TESTPLAN PACKAGES * -->
                                    <h4>Customizable TestPlan Packages</h4>
                                    <p>Private & Semi-Private</p>
                                    <div class="item-wrap">
                                        <h4><span><span>SIGNATURE</span> TestPlan</span> <span>2190/student</span></h4>
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
                                        <h4><span><span>SIGNATURE+</span> TestPlan</span> <span>3790/student</span></h4>
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
                                <!-- * SMALL-GROUP CLASSES * -->
                                <div class="sub-offering-wrap" data-sub-offering="act-prep_small-group-classes">
                                    <h4>Small-Group Classes</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>SIGNATURE</span> SERIES</span> <span>790/student</span></h4>
                                        <p>Our six-week Signature Series is ideal for mid-range scoring students who thrive in small, interactive settings.
                                            Research shows that students master skills faster and retain them longer when they are actively involved in the
                                            learning process. Our Signature Series—capped at 10 students—is designed to engage. This interactive environment
                                            provides an opportunity to tackle tough questions outside the range of a standard ACT classroom curriculum.
                                        </p>
                                        <ul>
                                            <li>Twenty-one hours of classroom instruction centered on core content, personalized
                                                strategies, and proven “tactics” (not tricks) from COLLEGE TESTPLAN’s ACT Essentials</li>
                                            <li>Weekly homework assignments derived from our comprehensive Self-Study Plans</li>
                                            <li>Access to unlimited practice tests</li>
                                            <li>Fully proctored Actual Conditions ACT the weekend prior to test day</li>
                                            <li>Comprehensive Essential Final Review on the eve of the test</li>
                                        </ul>
                                    </div>
                                    <div class="item-wrap">
                                        <h4><span><span>ESSENTIAL</span> PRIMER</span> <span>490/student</span></h4>
                                        <p>Our four-week Essential Primer is ideal for mid-range scoring students and mid-range striving students who desire a
                                            comprehensive yet time efficient overview of core content, general strategies, and essential tactics.</p>
                                        <ul>
                                            <li>Sixteen hours of classroom instruction centered on core content, personalized strategies,
                                                and proven “tactics” (not tricks) from COLLEGE TESTPLAN’s ACT
                                                Essentials
                                            </li>
                                            <li>Weekly homework assignments derived from our comprehensive Self-Study Plans</li>
                                            <li>Access to unlimited practice tests</li>
                                            <li>Fully proctored Actual Conditions ACT the weekend prior to test day</li>
                                            <li>Comprehensive Final Review on the eve of the test</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- * ACTUAL CONDITIONS SATs * -->
                                <div class="sub-offering-wrap" data-sub-offering="act-prep_actual-conditions-acts">
                                    <h4>Actual Conditions SATs</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>ACTUAL CONDITIONS</span> EXAMS</span> <span>30/student</span></h4>
                                        <p>Taking the ACT under Actual Conditions is a great way to boost skills and to test new strategies and essential tactics.
                                            Our Actual Conditions testing provides students with the invaluable opportunity to hone pacing, to fine-tune
                                            analytical skills, and to strengthen strategic guessing. Although students can achieve some of these objectives by
                                            completing tests at home or online, taking the ACT under Actual Conditions documents student performance
                                            without equivocation and familiarizes and desensitizes students to the “act” of taking standardized tests in a
                                            classroom setting. If desired, the optional ACT Essay can be incorporated upon request.</p>
                                    </div>
                                </div>
                                <!-- * ESSENTIAL FINAL REVIEWS * -->
                                <div class="sub-offering-wrap" data-sub-offering="act-prep_essential-final-reviews">
                                    <h4>Essential Final Reviews</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>ESSENTIAL</span> FINAL REVIEW - ACT</span> <span>150/student</span></h4>
                                        <p>A comprehensive two-hour group review of Reading, Writing & Language, Math, and the Essay designed for
                                            students who desire one final “walk through” before test day. All major content, concepts, and problem solving
                                            methods necessary to succeed on the SAT will be covered. These reviews are ideal for all students, even those not
                                            already enrolled in private or group tutoring. During these comprehensive reviews, students will . .</p>
                                        <ul>
                                            <li>Review all strategic and tactical approaches to Reading, Writing & Language, and Math questions via
                                                excerpts from COLLEGE TESTPLAN’s ACT Essentials</li>
                                            <li>Hone timing, reading, and reasoning on varied question sets</li>
                                            <li>Briefly address COLLEGE TESTPLAN’s “How to Write the ACT Essay”</li>
                                            <li>And address—in detail—our “essential” test day checklist</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- - Practice Exams - -->
                            <div class="offering-wrap" data-offering="practice-exams">
                                <h3>Practice Exams</h3>
                                <!-- * ACTUAL CONDITIONS SATs * -->
                                <div class="sub-offering-wrap" data-sub-offering="practice-exams_actual-conditions-acts">
                                    <h4>Actual Conditions SATs</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>ACTUAL CONDITIONS</span> EXAMS</span> <span>30/student</span></h4>
                                        <p>Taking the SAT under Actual Conditions is a great way to boost skills and to test new strategies and essential tactics.
                                            Our Actual Conditions testing provides students with the invaluable opportunity to hone pacing, to fine-tune
                                            analytical skills, and to strengthen strategic guessing. Although students can achieve some of these objectives by
                                            completing tests at home or online, taking the SAT under Actual Conditions documents student performance
                                            without equivocation and familiarizes and desensitizes students to the “act” of taking standardized tests in a
                                            classroom setting. If desired, the optional SAT Essay can be incorporated upon request.</p>
                                    </div>
                                </div>
                                <!-- * ACTUAL CONDITIONS SATs * -->
                                <div class="sub-offering-wrap" data-sub-offering="practice-exams_actual-conditions-sats">
                                    <h4>Actual Conditions ACTs</h4>
                                    <div class="item-wrap">
                                        <h4><span><span>ACTUAL CONDITIONS</span> EXAMS</span> <span>30/student</span></h4>
                                        <p>Taking the ACT under Actual Conditions is a great way to boost skills and to test new strategies and essential tactics.
                                            Our Actual Conditions testing provides students with the invaluable opportunity to hone pacing, to fine-tune
                                            analytical skills, and to strengthen strategic guessing. Although students can achieve some of these objectives by
                                            completing tests at home or online, taking the ACT under Actual Conditions documents student performance
                                            without equivocation and familiarizes and desensitizes students to the “act” of taking standardized tests in a
                                            classroom setting. If desired, the optional ACT Writing section can be incorporated upon request.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- - SAT Subject Tests - -->
                            <div class="offering-wrap" data-offering="sat-subject-tests">
                                <h3>SAT Subject Tests</h3>
                                <p>Although fewer and fewer colleges “require” SAT Subject Tests, they remain an excellent metric
                                    through which to differentiate yourself. For schools for which SAT Subject Tests are
                                    “recommended” (Duke, Georgetown), think of them as extra-credit assignments that
                                    demonstrate your passion for and strength in a given area. With fewer and fewer students taking
                                    these Subject Tests, they currently provide an invaluable opportunity to set yourself apart. The
                                    more positive data you can provide to selective colleges the better.</p>
                                <p>
                                    SAT Subject Tests are offered on the same dates as the SAT, except for in March when only the
                                    SAT itself is offered. You many not take the SAT and SAT Subject Tests on the same day. You
                                    may, however, take up to three SAT Subject Tests in a single testing day. It is extremely
                                    advantageous to plan ahead so that you can retake tests if necessary. By taking the tests in groups
                                    of two or three, you can maximize your opportunity to earn the highest possible scores. And
                                    since you control which individual Subject Tests scores are sent to colleges, taking multiple
                                    Subject Tests on multiple test dates is a highly advantageous strategy.
                                </p>
                                <h5>SAT Subject Test Tips</h5>
                                <ol>
                                    <li>
                                        Although there is a small, 1/4-point penalty for wrong answers (correct answers earn one
                                        point), do not leave any questions blank. You only need to get one out of every five answers
                                        correct to break even. Since even random guessing yields those odds, best-guess is unequivocally
                                        better than no-guess
                                    </li>
                                    <li> Take Subject Tests for single-year subjects (Biology, US History) in May or June. Take
                                        more general tests (Math, Literature) earlier in the year and repeat if necessary.</li>
                                    <li> Always take two or three tests in a single sitting. Each is only sixty minutes long. Taking
                                        more tests gives you the best possible chance of getting your highest scores.</li>
                                    <li> Order your tests strategically on testing day—it’s your call.</li>
                                    <li> Know which tests your target schools require or recommend. Many competitive schools and
                                        programs will provide guidelines outline their requirements and suggestions.</li>
                                </ol>
                                <p>At COLLEGE TESTPLAN, I will create a strategic TESTPLAN to coordinate all of your chosen
                                    Subject Tests. I typically recommend 8 to 12 hours of tutoring per subject for maximum efficacy.
                                </p>
                            </div>
                            <!-- - PSAT - -->
                            <div class="offering-wrap" data-offering="psat">
                                <h3>PSAT</h3>
                                <h5>Why the PSAT is important?</h5>
                                <p>Did you know that a student with high PSAT scores can earn National Merit scholarships and
                                    National Merit recognition? This is a hugely helpful factor on college applications. Plus, since
                                    both the PSAT and the SAT are written by the College Board, the PSAT offers an invaluable first
                                    opportunity to practice for the SAT itself.</p>
                                <p>COLLEGE TESTPLAN’s private and semi-private tutoring for the PSAT offers customized solutions
                                    based on your individual strengths and weaknesses. We also offer the following small-group
                                    Primer once a year.</p>
                                <!-- * ACTUAL CONDITIONS SATs * -->
                                <div class="sub-offering-wrap" data-sub-offering="psat_essential-psat-primer">
                                    <div class="item-wrap">
                                        <h4><span><span>ESSENTIAL</span> PSAT PRIMER</span> <span>490/student</span></h4>
                                        <p>Our four-week Essential PSAT Primer is ideal for students who desire a comprehensive primer to
                                            the PSAT. In addition to improving students’ standardized test-taking skills, these sessions build
                                            confidence, comfort, and familiarity. And since the PSAT simulates the SAT experience within a
                                            shorter test window, the preparation and subsequent results document both current achievement
                                            and projected future success. Our Essential PSAT Primer is offered annually every fall.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- - AP Courses & Exams - -->
                            <div class="offering-wrap" data-offering="ap-courses-and-exams">
                                <h3>AP Courses & Exams</h3>
                                <p>COLLEGE TESTPLAN offers support for both AP courses and AP tests.</p>
                                <p>AP course tutoring is typically done over an entire school year or over a shorter period of time
                                    when challenging assignments arise.</p>
                                <p>AP exam prep typically runs for two months, although that time frame can vary based on
                                    individual needs.</p>
                            </div>
                            <!-- - High School Entrance Exams - -->
                            <div class="offering-wrap" data-offering="high-school-entrance-exams">
                                <h3>High School Entrance Exams</h3>
                                <h5>Secondary School Admission Test — SSAT</h5>
                                <p>When you need to make a strong case for admission to private school, take full advantage of the
                                    opportunity. The SSAT score is one of the most critical aspects of the private school admission
                                    process. It is offered eight times per year, though most students take the test in November,
                                    December, or January.</p>
                                <p>
                                    COLLEGE TESTPLAN recommends taking the SSAT once in the summer and then at least twice
                                    during the academic year before you submit your applications.</p>
                                <p>
                                    The SSAT is administered by the Secondary School Admission Test Board. It has a Middle
                                    Level, previously called the Lower Level, for 5th through 7th graders (applying for admission to
                                    grades 6–8), and an Upper Level for 8th through 11th graders. The SSAT Board recently
                                    introduced an Elementary Level, for 3rd and 4th grade students (applying for admission to
                                    grades 4 and 5).</p>
                                <h5>Independent School Entrance Exam — ISEE</h5>
                                <p>Private schools want the highest-quality students they can find and there are only so many
                                    metrics available by which to measure. While interviews and essays are important, the discussion
                                    begins—or ends—with test scores and grades. The higher your grade point average, the higher
                                    your likelihood of acceptance.</p>
                                <p>
                                    The same is true of your standardized test scores. Most schools tell you which exam they prefer.
                                    In other cases, you’ll be given the choice of taking the ISEE or the SSAT. Choosing the right
                                    exam requires a deep understanding of what is tested and how the questions are presented.
                                    COLLEGE TESTPLAN can help you with this important decision.</p>
                                <p>
                                    The ISEE is offered eight times per year. Students can take the ISEE up to three times in a 12-
                                    month admission cycle but only once during each of the following three testing windows: fall
                                    (August to November), winter (December to March), and spring/summer (April to July).</p>
                                <p>
                                    The ISEE can also be taken in a private setting once every six months. This private testing is
                                    referred to as a Flex Test. COLLEGE TESTPLAN does not offer the Flex Test, but we can find you a
                                    suitable Flex Test center.</p>
                                <p>
                                    Since you can choose which scores are sent to prospective schools, taking the test more than one
                                    time is a no-lose strategy. COLLEGE TESTPLAN recommends taking the test in July, November, and
                                    December during the year in which you will be applying to private school.</p>
                                <h5>High School Placement Test — HSPT </h5>
                            </div>
                            <!-- - GRADUATE ENTRANCE EXAMS - -->
                            <div class="offering-wrap" data-offering="graduate-entrance-exams">
                                <h3>Graduate Entrance Exams</h3>
                                <h5>Graduate Management Admission Test — GMAT</h5>
                                <h5>Graduate Record Examination — GRE</h5>
                            </div>
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
