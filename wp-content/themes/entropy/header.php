<!DOCTYPE html>
<html>
<head>
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?><?php wp_title("|",true); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="Timothy Long">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather:400,700">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:300,400,700">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="adaptive-images">

	<header <?php 
        echo 'style="background-image: url(' . get_template_directory_uri() . '/images/overlay-4.png),
                url(' . get_template_directory_uri() . '/images/new' . rand(1, 7) . '-medium.jpg);"'
        ?>>
		<div class="header-inner">
			<div id="photo">
				<a href="<?php echo get_settings('home'); ?>">&nbsp;</a>
			</div>
			<div class="title">
				<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</header>
	<?php
	wp_nav_menu('primary-navigation');
	?>