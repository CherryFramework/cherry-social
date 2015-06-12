<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Fires before a widget form.
 *
 * @since 1.0.0
 */
do_action( 'cherry_facebook_like_box_widget_form_before' );
?>

<!-- Widget Title: Text Input -->
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'cherry-social' ); ?></label>
	<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" />
</p>
<!-- Widget Page URL: Text Input -->
<p>
	<label for="<?php echo $this->get_field_id( 'page_url' ); ?>"><?php _e( 'Page URL:', 'cherry-social' ); ?></label>
	<input type="text" name="<?php echo $this->get_field_name( 'page_url' ); ?>" value="<?php echo $page_url; ?>" class="widefat" id="<?php echo $this->get_field_id( 'page_url' ); ?>" />
	<?php $link = sprintf( "<a href='%s' target='_blank'>Facebook Pages</a>", esc_url( 'https://www.facebook.com/help/174987089221178/' ) ); ?>
	<small><?php printf( __( "The Like Box only works with %s.", 'cherry-social' ), $link ); ?></small>
</p>
<!-- Widget Height: Text Input -->
<p>
	<label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php _e( 'Height (px):', 'cherry-social' ); ?></label>
	<input type="number" min="70" max="2000" step="10" name="<?php echo $this->get_field_name( 'height' ); ?>" value="<?php echo $height; ?>" class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" placeholder="<?php sprintf( _e( 'Default (%spx)', 'cherry-social' ), $height ); ?>" /><br>
</p>
<!-- Widget Skin: Select Input -->
<p>
	<label for="<?php echo $this->get_field_id( 'skin' ); ?>"><?php _e( 'Skin:', 'cherry-social' ); ?></label>
	<select name="<?php echo $this->get_field_name( 'skin' ); ?>" class="widefat" id="<?php echo $this->get_field_id( 'skin' ); ?>">
	<?php foreach ( $skin as $k => $v ) { ?>
		<option value="<?php echo $k; ?>"<?php selected( $instance['skin'], $k ); ?>><?php echo $v; ?></option>
	<?php } ?>
	</select>
</p>
<!-- Widget Header: Checkbox -->
<p>
	<input id="<?php echo $this->get_field_id( 'header' ); ?>" name="<?php echo $this->get_field_name( 'header' ); ?>" type="checkbox" <?php checked( $header ); ?>>
	<label for="<?php echo $this->get_field_id( 'header' ); ?>"><?php _e( 'Display header?', 'cherry-social' ); ?></label>
</p>
<!-- Widget Borders: Checkbox -->
<p>
	<input id="<?php echo $this->get_field_id( 'border' ); ?>" name="<?php echo $this->get_field_name( 'border' ); ?>" type="checkbox" <?php checked( $border ); ?>>
	<label for="<?php echo $this->get_field_id( 'border' ); ?>"><?php _e( 'Display border?', 'cherry-social' ); ?></label>
</p>
<!-- Widget Stream: Checkbox -->
<p>
	<input id="<?php echo $this->get_field_id( 'stream' ); ?>" name="<?php echo $this->get_field_name( 'stream' ); ?>" type="checkbox" <?php checked( $stream ); ?>>
	<label for="<?php echo $this->get_field_id( 'stream' ); ?>"><?php _e( 'Display stream?', 'cherry-social' ); ?></label>
</p>
<!-- Widget Faces: Checkbox -->
<p>
	<input id="<?php echo $this->get_field_id( 'faces' ); ?>" name="<?php echo $this->get_field_name( 'faces' ); ?>" type="checkbox" <?php checked( $faces ); ?>>
	<label for="<?php echo $this->get_field_id( 'faces' ); ?>"><?php _e( 'Display faces?', 'cherry-social' ); ?></label>
</p>
<?php
/**
 * Fires after a widget form.
 *
 * @since 1.0.0
 */
do_action( 'cherry_facebook_like_box_widget_form_after' );
?>