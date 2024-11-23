<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Infinity
 */

$infinity_page_layout_private = get_post_meta( get_the_ID(), "infinity_page_layout_private", true );
$infinity_header_top          = get_post_meta( get_the_ID(), "infinity_header_top", true );
$infinity_sticky_menu         = get_post_meta( get_the_ID(), "infinity_sticky_menu", true );
$infinity_custom_logo         = get_post_meta( get_the_ID(), "infinity_custom_logo", true );
$infinity_heading_image       = get_post_meta( get_the_ID(), "infinity_heading_image", true );
$infinity_heading_desc        = get_post_meta( get_the_ID(), "infinity_heading_desc", true );
$infinity_bread_crumb_enable  = get_post_meta( get_the_ID(), "infinity_bread_crumb_enable", true );
$infinity_disable_comment     = get_post_meta( get_the_ID(), "infinity_disable_comment", true );
$infinity_disable_title       = get_post_meta( get_the_ID(), "infinity_disable_title", true );
$infinity_custom_class        = get_post_meta( get_the_ID(), "infinity_custom_class", true );
$infinity_one_page_scroll     = get_post_meta( get_the_ID(), "infinity_one_page_scroll", true );

global $tm_logo;
if(empty($tm_logo)) {
	$tm_logo = $infinity_custom_logo;
}

if ( $infinity_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
	$layout = get_post_meta( get_the_ID(), "infinity_page_layout_private", true );
} else {
	$layout = Kirki::get_option( 'infinity', 'page_layout' );
}
if ( $infinity_heading_image ) {
	$infinity_heading_image = get_post_meta( get_the_ID(), "infinity_heading_image", true );
} else {
	$infinity_heading_image = Kirki::get_option( 'infinity', 'page_bg_image' );
}
$classOnePageScroll = '';
if ( $infinity_one_page_scroll == 'on' ) {
	$classOnePageScroll = " one-page-scroll";
}

get_header(); ?>
<?php if ( $infinity_disable_title != 'on' ) { ?>
	<div class="big-title big-title--page"
	     style="background-image: url('<?php echo esc_url( $infinity_heading_image ); ?>')">
		<div style="transform: translateZ(0);" class="container contain-entry-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<span class="entry-desc"><?php echo wp_kses( $infinity_heading_desc, wp_kses_allowed_html( 'post' ) ) ?></span>
		</div>
	</div>
<?php } ?>

<div class="container">
	<div class="row">
		<?php if ( $layout == 'content-sidebar' ) { ?>
			<?php $class = 'col-md-9'; ?>
		<?php } else { ?>
			<?php $class = 'col-md-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<div class="content">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" itemscope="itemscope"
					         itemtype="http://schema.org/CreativeWork">
						<div class="entry-content<?php echo esc_attr( $classOnePageScroll ) ?>">
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'infinity' ),
								'after'  => '</div>',
							) );
							?>
						</div>
						<!-- .entry-content -->
					</article><!-- #post-## -->
					<?php if ( ( comments_open() || get_comments_number() ) && $infinity_disable_comment != 'on' ) : comments_template(); endif; ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if ( $layout == 'content-sidebar' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>
