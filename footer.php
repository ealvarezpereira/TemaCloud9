<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<!-- Esto es el footer -->
				<h1>Página integramente creada por NR1K Business</h1>
				<hr>
				<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen-child' ); ?>">
					<?php dynamic_sidebar( 'barraquique' ); ?>
				</aside><!-- #secondary -->
				
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>