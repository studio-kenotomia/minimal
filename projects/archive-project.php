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
			<?php if ( $layout == 'sidebar-content' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
			<?php if ( $layout == 'sidebar-content' || $layout == 'content-sidebar' ) { ?>
				<?php $class = 'col-md-8'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<main class="content">
					<div class="row masonry">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'brick' ); ?> itemscope="itemscope"
							         itemtype="http://schema.org/CreativeWork">

								<?php if ( has_post_thumbnail() ) { ?>
									<div class="post-thumb">
										<?php the_post_thumbnail( 'full' ); ?>
									</div>
								<?php } ?>

								<div class="info">
									<?php if ( 'post' == get_post_type() ) : ?>
										<span
											class="categories-links"><?php echo get_the_category_list( esc_html__( ', ', 'infinity' ) ) ?></span>
									<?php endif; ?>
									<header class="entry-header">
										<?php the_title( sprintf( '<h6 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' ); ?>
									</header>
									<div
										class="dates"><?php echo esc_html( get_the_date( get_option( 'date_format' ) ) ); ?></div>
									<!-- .entry-header -->

									<div class="read-more-contain">
										<a class="read-more"
										   href="<?php echo get_permalink() ?>"><?php echo esc_html__( 'Continue Reading', 'infinity' ) ?></a>
									</div>
									<!-- .entry-content -->
									<div class="entry-footer">
										<div class="row middle">
											<div class="col-sm-6">
												<?php if ( 'post' == get_post_type() ) : ?>
													<div class="entry-meta">
													<span class="comments-counts">
														<i class="fa fa-comment-o"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
													</div><!-- .entry-meta -->
												<?php endif; ?>
											</div>
											<div class="col-sm-6 end">
												<div class="share">
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
							</article><!-- #post-## -->
							<?php
						endwhile;
						?>
					</div>

					<?php infinity_paging_nav(); ?>
				</main>
			</div>
			<?php if ( $layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>