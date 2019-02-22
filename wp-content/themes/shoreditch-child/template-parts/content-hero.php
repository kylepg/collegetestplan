<?php
/**
 * Template part for displaying hero image on the single page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

if (post_password_required() || is_attachment()) {
    return;
}

if ('post' !== get_post_type() && ! has_post_thumbnail() || 'post' === get_post_type() && ! shoreditch_has_post_thumbnail()) {
    return;
}
?>

<div class="entry-hero" <?php shoreditch_background_image(); ?>>
	<div class="entry-hero-wrapper">
		<div class="title-wrap">
			<h1 style="color: #fff">SAT & ACT Services</h1>
			<p>Lorem ipsum dolor sit amet, vero mutat patrioque vis te, est ne facete singulis. Usu ex latine forensibus, te has delicata
				argumentum.
			</p>
		</div>
		<div class="big-btn-wrap">
			<button onclick="location.href='http://collegetestplan.loc/test-prep?o=sat-prep'" class="big-btn">
				<i class="fas fa-pencil-alt"></i>
				<p>SAT Prep</p>
			</button>
			<button onclick="location.href='http://collegetestplan.loc/test-prep?o=act-prep'" class="big-btn">
				<i class="fas fa-graduation-cap"></i>
				<p>ACT Prep</p>
			</button>
			<button onclick="location.href='http://collegetestplan.loc/admissions-matters'" class="big-btn">
				<i class="fas fa-school"></i>
				<p>Admissions<br>Matters</p>
			</button>
			<button onclick="location.href='http://collegetestplan.loc/resources-information/'" class="big-btn">
				<i class="fas fa-info-circle"></i>
				<p>Resources &<br>Information</p>
			</button>
		</div>
	</div>
	<!-- .entry-hero-wrapper -->
</div>
<!-- .entry-hero -->