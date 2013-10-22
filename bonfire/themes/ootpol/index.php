<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />

	<title><?php e($this->settings_lib->item('site.title')); ?></title>

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

	<?php echo Assets::css(); ?>

	<?php echo Assets::external_js('head.min.js'); 
	
	// Setup our default assets to load.
    Assets::add_js( array(base_url() .'assets/js/jquery-1.7.1.min.js',));
	?>
	
	
</head>
<body>

	<div class="page">

		<!-- Header -->
		<div class="head text-left">
			<h1><?php
                if (!isset($site_title) || !empty($site_title)) {
                    $site_title = "Unknown Site Name";
                } 
				echo $site_title; 
				?></h1>
		</div>
		
		<div class="nav">
				<?php 
				$attributes['id'] = 'nav';
				echo show_navigation('hn', FALSE, $attributes); ?>
		</div>
		
		<?php echo isset($content) ? $content : Template::yield(); ?>

	</div>	<!-- /page -->

	<div class="foot">
		Copyright <?php echo(date('Y')." ".config_item('site.title')); ?> . All Rights Reserved.

	</div>

	<div id="debug"></div>

	<script>
		head.js(<?php echo Assets::external_js(null, true) ?>);
		head.js(<?php echo Assets::module_js(true) ?>);
	</script>
	<?php echo Assets::inline_js(); ?>
</body>
</html>
