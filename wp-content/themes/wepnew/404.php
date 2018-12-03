<?php get_header(); ?>
	<div id="maincontent">
		<div class="wrap">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
			<div class="content">
				<div class="breadcrumbs">
				    <?php if(function_exists('bcn_display'))
				    { bcn_display();}?>
				</div>
				<div class="entry">
					<h1><?php bloginfo('title'); ?></h1>
					<h2><?php bloginfo('description'); ?></h2>
						<br/>
						Không tìm thấy! Mời bạn quay lại <a href="<?php bloginfo('home'); ?> ">trang chủ</a> 

				</div>
			</div>	
		</div>
	</div>	 
<?php get_footer(); ?> 