<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--Call CSS stylesheet-->
	<link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet" type="text/css">
	<!--Scalle to device width-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Use Mobile media queries-->
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:20em) and (max-width:48em)" href="<?php echo get_stylesheet_directory_uri();?>/css/small.css"/>
	<!--Tablet Media Queries-->
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:48.0625em) and (max-width: 61.825em)" href="<?php echo get_stylesheet_directory_uri();?>/css/medium.css"/>
	<!--Call Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Pacifico|Courgette' rel='stylesheet' type='text/css'>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<ul class="mobilenav">
			<?php wp_nav_menu(array('theme_location' => 'mobile-nav', 'container' => 'false')); ?>
		</ul>
		<input type="checkbox" id="nav-trigger" class="nav-trigger"/>
		<label for="nav-trigger"></label>
		<div class="mobile-wrap">
				<header>
					<a href="<?php echo home_url('home'); ?>" class="logo"><?php bloginfo('name'); ?></a>
					<nav class="mainnav">
							<?php wp_nav_menu(array('theme_location' => 'top-nav', 'container' => 'false')); ?>
					</nav>
				</header><!--End header-->