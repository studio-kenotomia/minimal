<?php
/**
 * Shortcode attributes
 * @var $type
 * @var $number
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Recentposts
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$args = array( 'post_type' => 'post', 'posts_per_page' => $number );
$loop = new WP_Query( $args );

if ( 'normal' == $type ) {
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'blog' ); ?>
	<?php
	endwhile;
} else { ?>
	<div class="row masonry">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'blog-masonry' ); ?>
		<?php
		endwhile;
		?>
	</div>
<?php
}
wp_reset_postdata();
wp_reset_query();
?>


