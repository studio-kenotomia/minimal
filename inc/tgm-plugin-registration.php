<?php
if ( ! function_exists( 'thememove_register_theme_plugins' ) ) :
	function thememove_register_theme_plugins() {

		$plugins = array(
			array(
                'name'               => esc_html__('ThemeMove Core', 'tm-dione'),
                'slug'               => 'thememove-core',
                'source'             => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/0940957940c236d2893408ffd899ae133dd42d27/thememove-core-1.3.4.2.zip',
                'version'            => '1.3.4.2',
                'required'           => true,
                'force_deactivation' => true,
            ),
			array(
				'name'               => 'Essential Grid',
				'slug'               => 'essential-grid',
				'source'             => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/0c5d1bb0f14f5dae47041cc1b75a31e10e4c500a/essential-grid.zip',
				'version'            => '2.1.0.2',
				'required'           => true,
			),
			array(
                'name'     => esc_html__('Visual Composer', 'tm-dione' ),
                'slug'     => 'js_composer',
                'source'   => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/246cbd85cf16b193cb72818e38c4e51d04862c40/js_composer.zip',
				'version'  => '5.0.1',
                'required' => true
            ),
			array(
                'name'               => esc_html__('Revolution Slider', 'tm-dione'),
                'slug'               => 'revslider',
                'source'             => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/f3ba64ceda10c53f99087f517f949c9b07235d94/revslider.zip',
				'version'  => '5.3.0.2',
                'required'           => true,
                'force_activation'   => false,
                'force_deactivation' => false,
            ),
			array(
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => false,
				'version'  => '4.3.1',
			),
			array(
				'name'     => 'MailChimp',
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
				'version'  => '3.1.6',
			),
			array(
				'name'     => 'Projects',
				'slug'     => 'projects-by-woothemes',
				'required' => false,
				'version'  => '1.5.0',
			)
		);

		$config = array(
			'id'           => 'tgmpa',
			// Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',
			// Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins',
			// Menu slug.
			'parent_slug'  => 'themes.php',
			// Parent menu slug.
			'capability'   => 'edit_theme_options',
			// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,
			// Show admin notices or not.
			'dismissable'  => true,
			// If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',
			// If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,
			// Automatically activate plugins after installation or not.
			'message'      => '',
			// Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'infinity' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'infinity' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'infinity' ),
				// %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'infinity' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update_maybe'      => _n_noop( 'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'infinity' ),
				// %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'infinity' ),
				// %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'infinity' ),
				'update_link'                     => _n_noop( 'Begin updating plugin', 'Begin updating plugins', 'infinity' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'infinity' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'infinity' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'infinity' ),
				'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'infinity' ),
				'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'infinity' ),
				// %1$s = plugin name(s).
				'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'infinity' ),
				// %1$s = plugin name(s).
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'infinity' ),
				// %s = dashboard link.
				'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'infinity' ),
				'nag_type'                        => 'updated',
				// Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);

		tgmpa( $plugins, $config );

	}

	add_action( 'tgmpa_register', 'thememove_register_theme_plugins' );
endif;
