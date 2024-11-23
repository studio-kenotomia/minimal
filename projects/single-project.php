<?php
/**
 * The template for displaying all project-single posts.
 *
 * @package Infinity
 */

$infinity_heading_image = Kirki::get_option( 'infinity', 'post_bg_image' );
$layout                 = Kirki::get_option( 'infinity', 'post_layout' );

if ( PORTFOLIO_TYPE == get_post_type() ) {

	$client     = get_post_meta( get_the_ID(), "_client", true );
	$client_url = get_post_meta( get_the_ID(), "_url", true );

	$infinity_portfolio_layout_private = get_post_meta( get_the_ID(), "infinity_portfolio_layout_private", true );
	$infinity_portfolio_title_style    = get_post_meta( get_the_ID(), "infinity_portfolio_title_style", true );
	$infinity_portfolio_heading_image  = get_post_meta( get_the_ID(), "infinity_portfolio_heading_image", true );
	$infinity_portfolio_custom_title   = get_post_meta( get_the_ID(), "infinity_portfolio_custom_title", true );
	$infinity_portfolio_heading_desc   = get_post_meta( get_the_ID(), "infinity_portfolio_heading_desc", true );
	$infinity_portfolio_custom_class   = get_post_meta( get_the_ID(), "infinity_portfolio_custom_class", true );

	if ( $infinity_portfolio_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
		$layout = $infinity_portfolio_layout_private;
	}
	if ( $infinity_portfolio_heading_image ) {
		$infinity_heading_image = $infinity_portfolio_heading_image;
	}
}
get_header(); ?>

<?php if ( 'image-background' == $infinity_portfolio_title_style ) { ?>
	<header class="big-title--single"
	        style="background-image: url('<?php echo esc_url( $infinity_heading_image ); ?>')">
		<div class="container">
			<?php if ( $infinity_portfolio_custom_title ) { ?>
				<h1 class="entry-title"><?php echo wp_kses( $infinity_portfolio_custom_title, wp_kses_allowed_html( 'post' ) ); ?></h1>
			<?php } else { ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php } ?>
			<span
				class="entry-desc"><?php echo wp_kses( $infinity_portfolio_heading_desc, wp_kses_allowed_html( 'post' ) ); ?></span>
		</div>
	</header>
	<div class="container">
		<div class="single-metadata row">
			<div class="col-md-3">
				<h6><?php echo esc_html__( 'DATE', 'infinity' ) ?></h6>
				<span class="metadata"><?php echo get_the_date( get_option( 'date_format' ) ); ?></span>
			</div>
			<div class="col-md-3">
				<h6><?php echo esc_html__( 'CLIENT', 'infinity' ) ?></h6>
				<span class="metadata"><a
						href="<?php echo esc_url( $client_url ); ?>"><?php echo esc_html( $client ) ?></a></span>
			</div>
			<div class="col-md-3">
				<h6><?php echo esc_html__( 'CATEGORY', 'infinity' ) ?></h6>
				<span
					class="metadata"><?php echo get_the_term_list( get_the_ID(), 'project-category', '', esc_html__( ', ', 'infinity' ) ) ?></span>
			</div>
			<div class="col-md-3">
				<h6><?php echo esc_html__( 'SHARE', 'infinity' ) ?></h6>

				<div class="metadata">
					<span><a target="_blank"
					         href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ) ?>"><i
								class="fa fa-facebook"></i></a></span>
					<span><a target="_blank"
					         href="http://twitter.com/share?text=<?php echo urlencode( get_the_title() . "&url=" . get_permalink() . "&via=twitter&related=" . "coderplus:Wordpress Tips, jQuery and more"); ?>"><i
								class="fa fa-twitter"></i></a></span>
					<span><a target="_blank"
					         href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ) ?>"><i
								class="fa fa-google-plus"></i></a></span>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	<header class="title--single">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php if ( $infinity_portfolio_custom_title ) { ?>
						<h1 class="entry-title"><?php echo wp_kses( $infinity_portfolio_custom_title, wp_kses_allowed_html( 'post' ) ); ?></h1>
					<?php } else { ?>
						<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
					<?php } ?>
					<span
						class="entry-desc"><?php echo wp_kses( $infinity_portfolio_heading_desc, wp_kses_allowed_html( 'post' ) ) ?></span>
				</div>
				<div class="col-md-4">
					<div class="contain-metadata">
						<div>
							<h6><?php echo esc_html__( 'DATE', 'infinity' ) ?></h6>
							<span class="metadata"><?php echo get_the_date( get_option( 'date_format' ) ); ?></span>
						</div>
						<div>
							<h6><?php echo esc_html__( 'CLIENT', 'infinity' ) ?></h6>
							<span class="metadata"><a
									href="<?php echo esc_url( $client_url ); ?>"><?php echo esc_html( $client ) ?></a></span>
						</div>
						<div>
							<h6><?php echo esc_html__( 'CATEGORY', 'infinity' ) ?></h6>
							<span
								class="metadata"><?php echo get_the_term_list( get_the_ID(), 'project-category', '', esc_html__( ', ', 'infinity' ) ) ?></span>
						</div>
						<div>
							<div class="metadata">
								<span><a target="_blank"
								         href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ) ?>"><i
											class="fa fa-facebook"></i></a></span>
								<span><a target="_blank"
								         href="http://twitter.com/share?text=<?php echo urlencode( get_the_title() . "&url=" . get_permalink() . "&via=twitter&related=" . "coderplus:Wordpress Tips, jQuery and more" ); ?>"><i
											class="fa fa-twitter"></i></a></span>
								<span><a target="_blank"
								         href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ) ?>"><i
											class="fa fa-google-plus"></i></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
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
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope"
						         itemtype="http://schema.org/CreativeWork">
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">',
									'after'  => '</div>',
								) );
								?>
								<?php
								// the_post_navigation
								$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
								$next     = get_adjacent_post( false, '', false );

								if ( ! $next && ! $previous ) {
									return;
								}
								?>
								<nav class="navigation post-navigation">
									<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'infinity' ); ?></h2>

									<div class="nav-links">
										<?php previous_post_link( '<div class="nav-previous">%link</div>', '%title' ); ?>
										<a class="portfolio-home-btn"
										   href="<?php echo esc_url( home_url( '/' ) ) ?>"></a>
										<?php next_post_link( '<div class="nav-next">%link</div>', '%title' ); ?>
									</div>
									<!-- .nav-links -->
								</nav>
								<!-- .navigation -->
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