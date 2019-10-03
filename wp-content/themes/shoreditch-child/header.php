<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<script>
	jQuery(document).ready(function() {
		jQuery('.nav-icon-3').click(function() {
			jQuery(this).toggleClass('open');
		});
	});
</script>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e('Skip to content', 'shoreditch'); ?>
		</a>

		<header id="masthead" class="site-header" role="banner">
			<div class="global-nav-wrap">
				<div class="global-nav">
					<ul>
						<li><i class="fas fa-phone"></i>(833)-728-PLAN</li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/location">Location</a></li>
						<li><a href="/blog">Blog</a></li>
					</ul>
				</div>
			</div>
			<div class="site-header-wrapper">
				<div class="site-branding">
					<a href="/" class="custom-logo-link" rel="home" itemprop="url">
						<img width="240" height="56" src="/wp-content/uploads/2018/04/CTP_Horizontal_Blue-White.png" class=" custom-logo " alt="College TestPlan Logo" itemprop="logo ">
					</a>
					<?php if (is_front_page() && is_home()) : ?>
						<h1 class="site-title ">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<?php bloginfo('name'); ?>
							</a>
						</h1>
					<?php else : ?>
						<p class="site-title">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<?php bloginfo('name'); ?>
							</a>
						</p>
					<?php endif; ?>
					<p class="site-description">
						<?php bloginfo('description'); ?>
					</p>
				</div>
				<!-- .site-branding -->

				<?php if (has_nav_menu('primary')) : ?>
					<div class="menu-toggle nav-icon-3" id="menu-toggle">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div id="site-menu" class="site-menu">
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e('Primary Menu', 'shoreditch'); ?>">
							<?php
								wp_nav_menu([
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								]);
								?>
						</nav>
						<!-- .main-navigation -->
					</div>
					<!-- .site-menu -->
				<?php endif; ?>
				<?php
				if (function_exists('shoreditch_woocommerce_header_cart')) {
					shoreditch_woocommerce_header_cart();
				}
				?>
			</div>
			<!-- .site-header-wrapper -->
		</header>
		<!-- #masthead -->

		<div id="content" class="site-content">
			<?php if (get_header_image()) : ?>
				<div class="header-image">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="">
					</a>
				</div>
				<!-- .header-image -->
			<?php endif; // End header image check.
