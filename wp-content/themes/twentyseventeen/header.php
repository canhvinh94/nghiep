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
<body  class=" <?php if ( is_home() ) { ?> pad_top_94 <?php  } ?> " <?php body_class($class); ?>>
	<div id="wrapper">
<?php 
if ( is_home() ) {
  ?>
		<header id="header" class="flex">
			<div class="col-md-2">
			</div>
			<div class="col-md-8 col-sm-5">
				<div class="top_header hidden-xs  text-center clearfix">
					<h2>
						Website nhạc beat chuyên nghiệp hàng đầu tại Việt Nam
					</h2>
					<marquee>
					</marquee>
				</div>
			</div>
			<div class="col-md-2 col-xs-9 col-sm-5">
				<form class="card search_form card-sm">
					<div class="s align-items-center">
						<div class="col-auto">
							<i class="fa fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Tìm kiếm">
						</div>
						<!--end of col-->

						<!--end of col-->
					</div>
				</form>
			</div>
		</header>
		<div class="slider-home  clearfix">
			<?php $rows = get_field('slider','option');if($rows){foreach($rows as $row){ ?>
				<a href="<?php echo  $row['link'] ?>"><img src="<?php echo  $row['img'] ?>"></a>
			<?php } } ?>
		</div>
<?php  } ?>
		<div class="menu_content hidden-xs">
			<div class="wrap-header container">
				<div class="logo hidden"><a href="<?php bloginfo('home');?>" title="<?php bloginfo('title'); ?>"><img src="<?php the_field('logo','option') ?>" alt="<?php bloginfo('title');?>"/></a></div>
				<nav class="primary-menu">
					<?php wp_nav_menu(array( 'theme_location'=> 'main','menu_class' => 'menu','menu_id'=> 'menu')); ?>
				</nav>
			</div>
		</div>