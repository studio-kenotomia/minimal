<?php
/**
 * Initial setup
 * =============
 */
$new_vc_dir = get_template_directory() . '/inc/vc-template';
if ( function_exists( "vc_set_shortcodes_templates_dir" ) ) {
	vc_set_shortcodes_templates_dir( $new_vc_dir );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_Thememove_Recentposts extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Testi extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Button extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Blog extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Icon extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Gmaps extends WPBakeryShortCode {
		public function __construct( $settings ) {
			parent::__construct( $settings );
			$this->jsScripts();
		}

		public function jsScripts() {
			wp_enqueue_script( 'thememove-js-maps', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en' );
			wp_enqueue_script( 'thememove-js-gmap3', THEME_ROOT . '/js/gmap3.min.js' );
		}
	}

	class WPBakeryShortCode_Thememove_Project_Details extends WPBakeryShortCode {
	}
}
require_once get_template_directory() . '/inc/vc-maps/blog.php';
require_once get_template_directory() . '/inc/vc-maps/button.php';
require_once get_template_directory() . '/inc/vc-maps/google-map.php';
require_once get_template_directory() . '/inc/vc-maps/recent-post.php';
require_once get_template_directory() . '/inc/vc-maps/thememove-icon.php';

// disable auto update of VC
add_action( 'vc_before_init', 'infinity_disable_updater' );
function infinity_disable_updater() {
	vc_manager()->disableUpdater();
}