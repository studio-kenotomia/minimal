<?php
	global $tm_logo;
	if(empty($tm_logo)) {
		$tm_logo = Kirki::get_option( 'infinity', 'site_logo' );
	}
?>
<header <?php infinity_header_class(); ?>>
	<div class="row middle-xs middle-sm">
		<div class="col-md-2 col-xs-10 site-branding">
			<?php if(!empty($tm_logo)) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
						src="<?php echo esc_url( $tm_logo ); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			<?php } else { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php } ?>
		</div>
		<div class="col-xs-2 hidden-md hidden-lg end">
			<i id="open-left" class="fa fa-navicon"></i>
		</div>
		<div class="col-md-10 hidden-xs hidden-sm">
			<div class="site-top pull-right">
				<div class="row middle">
					<nav id="site-navigation" class="main-navigation hidden-xs hidden-sm">
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'menu_id'         => 'primary-menu',
							'container_class' => 'primary-menu'
						) ); ?>
					</nav>
					<!-- #site-navigation -->
					<?php if ( Kirki::get_option( 'infinity', 'header_layout_search_enable' ) == 1 ) { ?>
						<div class="search-box">
							<?php get_search_form(); ?>
							<i class="pe-7s-search"></i>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
