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

		<p style="font-size: 16px; text-align: center;position: relative;left: 50%;transform: translate(-50%);">
			<i class="fas fa-phone"></i>(833)-728-PLAN | prep@collegetestplan.com<br>
			<a href="http://collegetestplan.loc/privacy-policy/">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">Copyright Info</a><br>
			<a href=""><i class="fab fa-twitter"></i></a>
			<a href=""><i class="fab fa-facebook-square"></i></a>
			<a href=""><i class="fab fa-linkedin"></i></a>
			<a href=""><i class="fab fa-facebook-square"></i></a>
		</p>
	</div>
	<!-- .site-footer-wrapper -->
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<?php wp_footer(); ?>

</body>

</html>