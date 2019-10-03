<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shoreditch
 */

get_header(); ?>

<div class="site-content-wrapper">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'shoreditch'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p></p>

					<?php

					// Only show the widget if site has multiple categories.
					if (shoreditch_categorized_blog()) :
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'shoreditch'); ?></h2>
							<ul>
								<?php
									wp_list_categories(array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									));
									?>
							</ul>
						</div><!-- .widget -->

					<?php
					endif;
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>

</div><!-- .site-content-wrapper -->

<?php
get_sidebar('footer');
get_footer();
