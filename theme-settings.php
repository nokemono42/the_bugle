<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
	register_setting( 'thebugle_options', 'thebugle_theme_options');
} 

function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'thebugle' ), __( 'Theme Options', 'thebugle' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; ?>
<div class="wrap">
<?php screen_icon(); echo '<h2>' . __( 'The Bugle Theme Options', 'thebugletheme' ) . '</h2>'; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
	<p><?php _e( 'Options saved', 'thebugletheme' ); ?></p>
</div>
<?php endif; ?> 
<form method="post" action="options.php">
<?php settings_fields( 'thebugle_options' ); ?>  
<?php $options = get_option( 'thebugle_theme_options' ); ?>
<h3>Header Options</h3>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><?php _e( 'Follow Us', 'thebugletheme' ); ?></th>
			<td><input id="thebugle_theme_options[showSocialLinks]" name="thebugle_theme_options[showSocialLinks]" type="checkbox" value="1" <?php checked( '1', $options['showSocialLinks'] ); ?> /> Show Social Media Links in Header</td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Twitter Handle', 'thebugletheme' ); ?></th>
			<td><label for="thebugle_theme_options[twitter]"><?php _e( 'http://www.twitter.com/', 'thebugletheme' ); ?></label> <input id="thebugle_theme_options[twitter]" type="text" name="thebugle_theme_options[twitter]" value="<?php esc_attr_e( $options['twitter'] ); ?>" /></td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Facebook Profile', 'thebugletheme' ); ?></th>
			<td><label for="thebugle_theme_options[facebook]"><?php _e( 'http://www.facebook.com/', 'thebugletheme' ); ?></label> <input id="thebugle_theme_options[facebook]" type="text" name="thebugle_theme_options[facebook]" value="<?php esc_attr_e( $options['facebook'] ); ?>" /></td>
		</tr>
	</tbody>
</table>
<p class="submit"><input class="button button-primary" id="submit" name="submit" type="submit" value="<?php _e( 'Save Options', 'thebugletheme' ); ?>" /></p>
</form>
</div>
<? } ?>