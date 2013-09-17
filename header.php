<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- mobile meta -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/library/js/respond.min.js"></script>
    <![endif]-->

	<!-- icons & favicons -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<!-- or, set /favicon.ico for IE10 win -->
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	<?php $options = get_option( 'thebugle_theme_options' ); ?> 

	<!-- drop Google Analytics Here -->
	<!-- end analytics -->
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header>
			<div class="row">
				<div class="col-md-3 date"><?php echo date('l F jS, Y'); ?></div>
				<?php if ($options['showSocialLinks'] == 1) { ?>
				<div class="col-md-3 col-md-offset-6 social-links">Follow Us:
				<?php if ($options['twitter']) {  echo '<a href="http://www.twitter.com/' . $options['twitter'] . '" target="_blank"><img class="social-icons" src="' . get_template_directory_uri() . '/img/tw_icon_16.png" /></a>'; } ?>
				<?php if ($options['facebook']) {  echo '<a href="http://www.facebook.com/' . $options['facebook'] . '" target="_blank"><img class="social-icons" src="' . get_template_directory_uri() . '/img/fb_icon_16.png" /></a>'; } ?>
				<?php //if ($options['rss']) {  echo $rss; } ?>
				</div>
				<? } ?>
			</div>
		</header>
	</div>

