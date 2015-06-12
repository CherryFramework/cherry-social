<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>

<div class="fb-like-box"
	data-href="<?php echo $page_url; ?>"
	data-colorscheme="<?php echo $skin; ?>"
	data-show-faces="<?php echo $faces; ?>"
	data-header="<?php echo $header; ?>"
	data-stream="<?php echo $stream; ?>"
	data-show-border="<?php echo $border; ?>"
	data-height="<?php echo $height; ?>"
	>
</div>

<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>