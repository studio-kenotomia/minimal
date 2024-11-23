<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Infinity
 */

/**
 * Header Class
 * ============
 *
 */
function infinity_header_class( $class = '' ) {
	echo 'class="' . join( ' ', infinity_get_header_class( $class ) ) . '"';
}

function infinity_get_header_class( $class = '' ) {
	$classes   = array();
	$classes[] = 'site-header';
	$classes   = array_map( 'esc_attr', $classes );
	$classes   = apply_filters( 'infinity_header_class', $classes, $class );

	return array_unique( $classes );
}

/**
 * Footer Class
 * ============
 *
 */
function infinity_footer_class( $class = '' ) {
	echo 'class="' . join( ' ', infinity_get_footer_class( $class ) ) . '"';
}

function infinity_get_footer_class( $class = '' ) {
	$classes = array();

	$classes[] = 'site-footer';

	$classes = array_map( 'esc_attr', $classes );

	$classes = apply_filters( 'infinity_footer_class', $classes, $class );

	return array_unique( $classes );
}

/**
 * Adds custom classes to the array of body classes.
 * ================================================
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function infinity_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	global $infinity_custom_class;
	if ( $infinity_custom_class ) {
		$classes[] = $infinity_custom_class;
	}

	$classes[] = Kirki::get_option( 'infinity', 'header_type' );

	global $infinity_page_layout_private;
	if ( $infinity_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
		$layout = get_post_meta( get_the_ID(), "infinity_page_layout_private", true );
	} else {
		$layout = Kirki::get_option( 'infinity', 'page_layout' );
	}

	$classes[] = $layout;

	if ( defined( 'TM_CORE_VERSION' ) ) {
		$classes[] = 'core_' . str_replace( ".", "", TM_CORE_VERSION );
	}

	return $classes;
}

add_filter( 'body_class', 'infinity_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 * ==========================================================================
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 *
	 * @return string The filtered title.
	 */
	function infinity_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'infinity' ), max( $paged, $page ) );
		}

		return $title;
	}

	add_filter( 'wp_title', 'infinity_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function infinity_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}

	add_action( 'wp_head', 'infinity_render_title' );
endif;

/***
 * is_tree conditional
 * ===================
 */
if(!function_exists('is_tree')) {
	function is_tree( $pid ) {      // $pid = The ID of the page we're looking for pages underneath
		global $post;         // load details about this page
		if ( is_page() && ( $post->post_parent == $pid || is_page( $pid ) ) ) {
			return true;
		}   // we're at the page or at a sub page
		else {
			return false;
		}  // we're elsewhere
	}
}

/**
 * Custom Comment Form
 * ========================================================================
 */
function infinity_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, $size = '100' ); ?>
		</div>
		<div class="comment-content">
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'infinity' ) ?></em>
				<br/>
			<?php endif; ?>
			<div class="metadata">
				<?php printf( wp_kses( __( '<cite class="fn">%s</cite>', 'infinity' ), array( 'cite' => array( 'class' => array() ) ) ), get_comment_author_link() ) ?>
				<br/>
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php printf( esc_html__( '%1$s', 'infinity' ), get_comment_date(), get_comment_time() ) ?></a>
				<?php edit_comment_link( esc_html__( '(Edit)', 'infinity' ), '  ', '' ) ?>
			</div>
			<?php comment_text() ?>
			<?php comment_reply_link( array_merge( $args, array(
				'depth'     => $depth,
				'max_depth' => $args['max_depth']
			) ) ) ?>
		</div>
	</div>
	<?php
}

function infinity_custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'infinity_custom_excerpt_length', 999 );

/**
 * Extra Info
 * =============
 */
function infinity_extra_info() {
	global $wp_version;
	$child_theme        = wp_get_theme();
	$child_theme_in_use = false;
	if ( PARENT_THEME_NAME != $child_theme->name ) {
		$child_theme_in_use = true;
	}
	$vc_version = "Not activated";
	if ( defined( 'WPB_VC_VERSION' ) ) {
		$vc_version = "v" . WPB_VC_VERSION;
	}
	$tm_core_version = "Not activated";
	if ( defined( 'TM_CORE_VERSION' ) ) {
		$tm_core_version = "v" . TM_CORE_VERSION;
	}
	?>
	<!--
    * WordPress: v<?php echo esc_html( $wp_version ) . "\n"; ?>
    * ThemMove Core: <?php echo esc_html( $tm_core_version ); ?><?php echo "\n"; ?>
	* Visual Composer: <?php echo esc_html( $vc_version ); ?><?php echo "\n"; ?>
    * Theme: <?php echo esc_html( PARENT_THEME_NAME ); ?> v<?php echo esc_html( PARENT_THEME_VERSION ); ?> by <?php echo esc_html( PARENT_THEME_AUTHOR ) . "\n"; ?>
    * Child Theme: <?php if ( $child_theme_in_use == true ) { ?>Activated<?php } else { ?>Not activated<?php } ?><?php echo "\n"; ?>
    -->
<?php }

add_action( 'wp_head', 'infinity_extra_info', 9999 );
/**
 * Add default avatar
 * ========================================================================
 */

// Add a default avatar to Settings > Discussion
if ( ! function_exists( 'infinity_default_avatar' ) ) {
	function infinity_default_avatar( $avatar_defaults ) {
		$avatar                     = AVATAR_DEFAULT;
		$avatar_defaults[ $avatar ] = 'Infinity Avatar';

		return $avatar_defaults;
	}

	add_filter( 'avatar_defaults', 'infinity_default_avatar' );
}
