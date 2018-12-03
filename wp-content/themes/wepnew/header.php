<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title(' '); ?></title>
		<?php wp_head(); ?>
		<?php the_field('code','option') ?>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=vietnamese" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	</head>
	<body <?php body_class($class); ?>>
		<div id="wrapper">
		<header id="header">
			<div class="wrap-header container">
				<div class="logo"><a href="<?php bloginfo('home');?>" title="<?php bloginfo('title'); ?>"><img src="<?php the_field('logo','option') ?>" alt="<?php bloginfo('title');?>"/></a></div>
				<nav class="primary-menu">
					<?php wp_nav_menu(array( 'theme_location'=> 'main','menu_class' => 'menu','menu_id'=> 'menu')); ?>
				</nav>
			</div>
		</header>