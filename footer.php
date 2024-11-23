<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Infinity
 */
?>

</div><!-- #content -->

<footer <?php infinity_footer_class(); ?>>
	<?php if ( Kirki::get_option( 'infinity', 'copyright_layout_enable' ) == 1 ) { ?>
		<div class="copyright">
			<div class="container">
				<div class="row middle">
					<div class="col-md-12 copyright-text">
						<?php echo html_entity_decode( Kirki::get_option( 'infinity', 'copyright_layout_text' ) ); ?>
					</div>
					<div class="col-md-12 social">
						<?php wp_nav_menu( array(
							'theme_location'  => 'social',
							'menu_id'         => 'social-menu',
							'container_class' => 'social-menu',
							'fallback_cb'     => false
						) ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</footer>
</div><!-- #page -->

<!-- Scroll to top -->
<a class="scrollup" title="Go to top"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>
