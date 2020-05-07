<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yesterday
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-wrap">
			<div class="footer-inner left">
				<div class="logo-footer">
					<?php the_custom_logo();?>
				</div>
				<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yesterday' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'yesterday' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'yesterday' ), 'yesterday', '<a href="https://www.linkedin.com/in/gusdarma/">gusdarma</a>' );
					?>
				</div><!-- .site-info -->
			</div>
			<div class="footer-inner right">
				<p class="copy-right">© <?php echo date('Y'); ?> Yesterday Wordpress Theme. All rights reserved</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
