<?php
/**
 * @package Infinity
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' == get_post_type() ) : ?>
		<span class="categories-links"><?php echo get_the_category_list( esc_html__( ', ', 'infinity' ) ) ?></span>
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</header>
	<div class="dates"><?php the_date( get_option( 'date_format' ) ); ?></div>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumb">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php } ?>
	<!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'infinity' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'infinity' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div>

	<div class="read-more-contain">
		<a class="link"
		   href="<?php echo get_permalink() ?>"><?php echo esc_html__( 'Continue Reading', 'infinity' ) ?></a>
	</div>
	<!-- .entry-content -->
	<div class="entry-footer">
		<div class="row middle">
			<div class="col-xs-6">
				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<span class="comments-counts"><i
								class="fa fa-comment-o"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
						<?php edit_post_link( esc_html__( 'Edit', 'infinity' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
			<div class="col-xs-6 end">
				<div class="share">
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

</article><!-- #post-## -->