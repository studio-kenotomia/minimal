<?php
/**
 * Template part for displaying single posts.
 *
 * @package Infinity
 */

?>
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

<div class="tags">
	<?php the_tags( 'Tags ', ' ' ); ?>
</div>

<!-- .entry-content -->
<div class="entry-footer">
	<div class="row middle">
		<div class="col-sm-6">
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<span class="comments-counts"><i
							class="fa fa-comment-o"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
					<span><?php echo getPostLikeLink( get_the_ID() ); ?></span>
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

<div class="author-info">
	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), '100x100', null, get_the_author_meta( 'display_name' ) ); ?>
	</div>
	<div class="author-desc">
		<div class="author-name">
			<a href="<?php echo esc_attr( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
				<?php echo esc_html( get_the_author_meta( 'display_name' ) ) ?>
			</a>
		</div>
		<div class="author-text">
			<?php echo esc_html( get_the_author_meta( 'description' ) ) ?>
		</div>
		<div class="author-email">
			<a class="link" href="mailto:<?php echo esc_attr( get_the_author_meta( 'user_email' ) ) ?>">
				<?php echo esc_html( get_the_author_meta( 'user_email' ) ) ?>
			</a>
		</div>
	</div>
</div>
