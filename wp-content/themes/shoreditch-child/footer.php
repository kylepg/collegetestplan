<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>

</div>
<!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer-wrapper">
		<?php shoreditch_social_menu(); ?>

		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'shoreditch')); ?>">
				<?php printf(esc_html__('Proudly powered by %s', 'shoreditch'), 'WordPress'); ?>
			</a>
			<span class="sep">/</span>
			<?php printf(esc_html__('Theme: %1$s by %2$s.', 'shoreditch'), 'Shoreditch', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>'); ?>
		</div>
		<!-- .site-info -->
		<p style="font-size: 16px; text-align: center;position: relative;left: 50%;transform: translate(-50%);">@ TRADECENTER 128 100 TradeCenter, Suite G-700 Woburn, MA 01801
			<br> 617.721.5516 | prep@collegetestplan.com</p>
	</div>
	<!-- .site-footer-wrapper -->
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<?php wp_footer(); ?>

</body>

</html>