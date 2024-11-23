<?php
function infinity_css_custom_code() {
?>
<style type="text/css">
<?php if(Kirki::get_option( 'infinity', 'webkit_scrollbar_enable' ) == 1) { ?>
::-webkit-scrollbar {
    width: 10px;
    background-color: <?php echo Kirki::get_option( 'infinity', 'site_color_secondary' ) ?>;
}

::-webkit-scrollbar-thumb {
    background-color: <?php echo Kirki::get_option( 'infinity', 'site_color_primary' ) ?>;
}

/*::-webkit-scrollbar-thumb:window-inactive {*/
/*background: rgba(33, 33, 33, .3);*/
/*}*/
<?php } ?>
</style>
  <?php }

add_action( 'wp_head', 'infinity_css_custom_code' );
