<?php
extract( shortcode_atts( array(
	'type'     => '',
	'text'     => '',
	'url'      => '',
	'icon'     => '',
	'el_class' => '',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
?>
<a <?php echo 'class="' . esc_attr( $type ) . ' ' . esc_attr( $el_class ) . '"'; ?>
	href="<?php echo esc_url( $url ); ?>"
	data-hover="<?php echo esc_attr( $text ); ?>">
	<span>
		<?php echo wp_kses( $text , wp_kses_allowed_html( 'post' ) ); ?>
		<?php if ( $icon ) { ?>
			<i class="fa <?php echo esc_attr( $icon ); ?>"></i>
		<?php } ?>
	</span>
</a>