<?php
/**
 * Shortcode attributes
 * @var $type_display
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Blog
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<?php
global $wp_query;
$paged = 1;
if ( get_query_var( 'paged' ) != '' )  {
	$paged = get_query_var( 'paged' );
}
if ( get_query_var( 'page' ) != '' )  {
	$paged = get_query_var( 'page' );
}

$args  = array(
	'post_type' => 'post',
	'paged'     => $paged
);
query_posts( $args );
?>
<?php if ( have_posts() ) : ?>
	<?php if ( 'normal' == $type_display ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'blog' ); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="row masonry">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'blog-masonry' ); ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php infinity_paging_nav(); ?>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'infinity' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>
