<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->
		<div id="footer">
			<div class="center">
				<div class="col4">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>"  >
						</a>
					</div>
				</div>
				<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
                            <div class="clear">
			</div>
			</div><!-- #primary-sidebar -->
			
		</div><!-- #footer -->

	</div><!-- #page -->
	<footer id="colophon" class="site-footer" role="contentinfo">
						
	</footer><!-- #colophon -->
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/dist/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>