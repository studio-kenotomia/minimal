<?php
/**
 * The template for displaying search results pages.
 *
 * @package Infinity
 */
$infinity_heading_image = Kirki::get_option( 'infinity', 'page_bg_image' );
$layout                 = Kirki::get_option( 'infinity', 'search_layout' );
get_header(); ?>
	<header class="big-title" style="background-image: url('<?php echo esc_url( $infinity_heading_image ); ?>')">
		<div class="container">
			<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'infinity' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<span class="entry-desc"></span>
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
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'search' ); ?>
						<?php endwhile; // end of the loop. ?>
						<?php infinity_paging_nav(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</main>
			</div>
			<?php if ( $layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>
