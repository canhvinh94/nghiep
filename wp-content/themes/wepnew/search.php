<?php get_header(); $a=get_query_var('cat' );?>

	<div id="maincontent">

		<div class="container clearfix">
			<div class="breadcrumb"  typeof="BreadcrumbList" vocab="http://schema.org/">
	<div class="container">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?></div>
</div>
		<div class="box-content"><div class="row">
			
			
				<div class="all-box">
						
			
			
			<?php if(get_field('loai','category_'.$a)!=2){ ?>
			<div class="content col-md-9">
				<h1 class="entry-title rs cat-title" ><span>Tìm kiếm: "<?php echo get_search_query(); ?>"</span></h1>
			<?php if (category_description( $category )) : ?>
				<div class="cat-des">
				<?php echo category_description( $category ); ?>
			</div>
			<?php endif ?>
							<div class="sum-archive">
								<div class="row">
								<?php 
									if(have_posts()){
									while(have_posts()):the_post();$format = get_post_format();setPostViews($post->ID);
								?>
								<div class="post-cat-show col-md-4">
								<ul class="post-cat  clearfix">
									<li><a href="<?php the_permalink(); ?>"><?php  if(get_the_post_thumbnail( )){the_post_thumbnail('medium' );}else{?><img src="<?php echo catch_that_image() ?>" /> <?php } ?></a> </li>
									<li class="rs title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									
									<li><?php the_excerpt(); ?></li>
									
								</ul></div>
								<?php endwhile;wp_reset_postdata();wp_pagenavi(); ?>
								<?php }?>
							</div></div>
							</div><div class="col-md-3 sidebar-left sidebar">
				<?php dynamic_sidebar('left' ); ?>
			</div>
				<?php }else{ ?>
<div class="content col-md-9">
				<h1 class="entry-title rs cat-title" ><span><?php echo single_cat_title();?></span></h1>
			<?php if (category_description( $category )) : ?>
				<div class="cat-des">
				<?php echo category_description( $category ); ?>
			</div>
			<?php endif ?>
							<div class="sum-archive">
								<div class="row">
								<?php 
									if(have_posts()){
									while(have_posts()):the_post();$format = get_post_format();setPostViews($post->ID);
								?>
								<div class="post-cat-show post-cat-duan col-md-4">
								<ul class="post-cat  clearfix">
									<li><a href="<?php the_permalink(); ?>"><?php  if(get_the_post_thumbnail( )){the_post_thumbnail('medium' );}else{?><img src="<?php echo catch_that_image() ?>" /> <?php } ?></a> </li>
									<li class="rs title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									
									<li class="post-meta"><span><i class="fa fa-globe"></i> <?php the_field('vitri') ?></span><span><i class="fa fa-crosshairs"></i> Quy mô: <?php the_field('quy_mo') ?><sup>2</sup></span></li>
									
								</ul></div>
								<?php endwhile;wp_reset_postdata();wp_pagenavi(); ?>
								<?php }?>
							</div></div>
							</div><div class="col-md-3 sidebar-left sidebar">
				<?php dynamic_sidebar('left' ); ?>
			</div>

				<?php } ?>			
					</div>		
			
		</div></div>
		</div>
		
	</div><!-- end #maincontent-->		
<?php get_footer(); ?>		