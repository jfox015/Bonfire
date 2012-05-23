<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />

	<title><?php echo config_item('site.title'); ?></title>

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

	<?php echo Assets::css(null, 'screen', true); ?>

	<?php echo Assets::external_js('head.min.js'); 
	
	// Setup our default assets to load.
    Assets::add_js( array(base_url() .'assets/js/jquery-1.7.1.min.js',));
	?>
</head>

<body<?php if (isset($body_class)) { echo(' class="'.$body_class.'"'); } ?>>
    <?php echo isset($content) ? $content : Template::yield(); ?>

	<div id="debug"></div>

	<script>
		head.js(<?php echo Assets::external_js(null, true) ?>);
		head.js(<?php echo Assets::module_js(true) ?>);
	</script>
	<?php echo Assets::inline_js(); ?>
</body>
</html>
