<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Infinity
 */
$infinity_heading_image = Kirki::get_option( 'infinity', 'page_bg_image' );
$layout                 = Kirki::get_option( 'infinity', 'archive_layout' );
get_header(); ?>
	<header class="big-title" style="background-image: url('<?php echo esc_url( $infinity_heading_image ); ?>')">
		<div class="container">
			<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<span class="entry-desc">
				<?php the_archive_description(); ?>
			</span>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<?php if ( $layout == 'content-sidebar' ) { ?>
				<?php $class = 'col-md-9'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<main class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'blog' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php infinity_paging_nav(); ?>
				</main>
			</div>
			<?php if ( $layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>