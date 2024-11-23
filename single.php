<?php
/**
 * The template for displaying all single posts.
 *
 * @package Infinity
 */
$infinity_heading_image = Kirki::get_option( 'infinity', 'post_bg_image' );
$layout                 = Kirki::get_option( 'infinity', 'post_layout' );
get_header(); ?>
	<div class="big-title big-title--single"
	     style="background-image: url('<?php echo esc_url( $infinity_heading_image ); ?>')">
		<div class="container contain-entry-title">
			<h1 class="entry-title"><?php echo esc_html__( 'Blog updates', 'infinity' ) ?></h1>
			<span class="entry-desc"><?php echo esc_html__( 'Latest news & updates', 'infinity' ) ?></span>
		</div>
	</div>
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

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope"
						         itemtype="http://schema.org/CreativeWork">
							<div class="entry-content">
								<?php get_template_part( 'template-parts/content', 'single' ); ?>
								<?php the_post_navigation(); ?>
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>
							</div>
							<!-- .entry-content -->
						</article><!-- #post-## -->

					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php if ( $layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>