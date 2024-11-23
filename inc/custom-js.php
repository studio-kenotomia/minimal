<?php function infinity_js_custom_code() { ?>
	<?php if ( Kirki::get_option( 'infinity', 'custom_js_enable' ) == 1 ): ?>
		<?php echo html_entity_decode( Kirki::get_option( 'infinity', 'custom_js' ) ); ?>
	<?php endif ?>
	<?php if ( Kirki::get_option( 'infinity', 'nav_sticky_enable' ) == 1 && has_nav_menu( 'primary' ) ): ?>
		<?php if ( Kirki::get_option( 'infinity', 'header_type' ) == 'header01' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".site-header").headroom(
						{
							offset: 10
						}
					);
				});
			</script>
		<?php } ?>
	<?php endif ?>
<?php }

add_action( 'wp_footer', 'infinity_js_custom_code' );
