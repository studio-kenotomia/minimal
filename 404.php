<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Infinity
 */
$args_widget = array(
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>',
);

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main row contain-error-404" role="main">

		<section class="error-404 not-found col-md-9">
			<header class="page-header">
				<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'infinity' ); ?></h2>
			</header>
			<!-- .page-header -->

			<div class="page-content">
				<br/>

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'infinity' ); ?></p>

				<?php get_search_form(); ?>

			</div>
			<!-- .page-content -->
		</section>

		<?php get_sidebar(); ?>

		<!-- .error-404 -->

	</main>
	<!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
