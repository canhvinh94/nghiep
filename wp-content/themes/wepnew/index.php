
<div class="slider-home clearfix">
	<?php $rows = get_field('slider','option');if($rows){foreach($rows as $row){ ?>
	<a href="<?php echo  $row['link'] ?>"><img src="<?php echo  $row['img'] ?>"></a>
	<?php } } ?>
</div>

<?php get_header(); ?>
<div class="container-home">
	<section class="show-pagehome clearfix">
		<div class="pagehome-inner clearfix">
			<div class="wrap-pagehome container">
				<div class="pagehome-details entry-content clearfix">
					<?php the_field('chinh_sach','option')?>
					<?php $rows = get_field('tong_quan','option');if($rows){foreach($rows as $row){ ?>
					<div class="row">
						<div class="col-md-6">
							<?php echo  $row['left'] ?>
						</div>
						<div class="col-md-6">
							<?php echo  $row['right'] ?>
						</div>
					</div>
					<?php } } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="show-pagehome clearfix">
		<div class="pagehome-inner pagehome-inner-full clearfix">
			<div class="wrap-pagehome">
				<div class="pagehome-details entry-content clearfix">
					<?php $rows = get_field('vi_tri','option');if($rows){foreach($rows as $row){ ?>
					<div class="greenbox clearfix">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<h2><span style="font-size: 24pt;font-weight: 700"><?php echo  $row['title'] ?></span></h2>
								</div>
								<div class="col-md-6">
									<p><span style="font-size: 12pt;"><?php echo  $row['text'] ?></span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="full-img"><img src="<?php echo  $row['img'] ?>"></div>
					<div class="container">
						<ul class="class-list-50">
							<?php echo  $row['vi_tri'] ?>
						</ul>
					</div>
					<?php } } ?>
				</div>
			</div>
		</div>
		<div class="utilities clearfix">
			<div class="wrap-utilities container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 utiliti-hotline"> <a href="tel:<?php the_field('hotline','option')?>"><?php the_field('hotline','option')?></a></div>
					<div class="col-md-4 utiliti-popupform"> <a href="javascript:;" class="popupms pum-trigger" data-toggle="modal" data-target="#exampleModalCenter" style="cursor: pointer;">Đăng ký tư vấn</a></div>
				</div>
			</div>
		</div>
	</section>
	<section class="show-pagehome clearfix">
		<div class="pagehome-inner pagehome-inner-full clearfix">
			<div class="wrap-pagehome clearfix">
				<div class="pagehome-details entry-content clearfix">
					<?php if( have_rows('tien_ich','option') ): ?>
					<?php while ( have_rows('tien_ich','option') ) : the_row(); ?>
					<div class="greenbox clearfix">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<h2><span style="font-size: 24pt;font-weight: 700"><?php the_sub_field('title'); ?></span></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="pagehome-inner clearfix">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<?php the_sub_field('content'); ?>
								</div>
								<div class="col-md-8">
									<img src="<?php the_sub_field('img'); ?>">
								</div>
							</div>
							<div class="gallery row clearfix">
								<?php $images = get_sub_field('gallery');
								if( $images ): ?>
								<?php foreach( $images as $image ): ?>
								<div class="col-md-3">
									<div class="img">
										<a class="d-block" data-fancybox="images" href="<?php echo $image['url']; ?>" data-width="1500" data-height="1000">
											<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
										</a>
										<p class="wp-caption-text"><span class="wpcaptext-title"><?php echo $image['caption']; ?></span><span class="wpcaptext-border"></span></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<?php endif;
					endwhile;
					else :
					endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="show-pagehome clearfix">
		<?php if( have_rows('mat_bang','option') ): ?>
		<?php while ( have_rows('mat_bang','option') ) : the_row(); ?>
		<div class="pagehome-inner" style="background-color:#f5f5f5;">
			<div class="wrap-pagehome container">
				<div class="pagehome-details entry-content clearfix">
					<h2 style="text-align: center;"><span style="font-size: 24pt; color: #005543;"><?php the_sub_field('title'); ?></span></h2>
					<h3 style="text-align: center;"><span style="color: #d7af52; font-size: 18pt;"><?php the_sub_field('name'); ?></span></h3>
				</div>
			</div>
			<div class="img-full"><img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('title'); ?>"></div>
			<div class="container">
				<div class="tab-nav pagehome-inner clearfix">
					<?php if( have_rows('tab') ): $x==0;?>
					<div class="panel-tab" role="tab" id="heading<?php echo $x; ?>">
						<ul class="nav-tab" id="myTab" role="tablist">
							<?php while( have_rows('tab') ): the_row() ;$x++;?>
							<li class="<?php if($x==1){echo 'active';}  ?>">
								<a class="nav-link" href="#tab1-<?php echo $x;?>" role="tab" data-toggle="tab"><?php the_sub_field('title') ?></a>
							</li>
							<?php   endwhile; $x=0; ?>
						</ul>
					</div>
					<div class="tab-content" id="myTabContent" style="border-top: 7px solid rgb(0, 85, 67);">
						<?php while( have_rows('tab') ): the_row() ;$x++;?>
						<div class="tab-pane fade <?php if ($x==1) {echo 'active in';} ?>" id="tab1-<?php echo $x;?>">
							<div class="img">
								<a class="d-block" data-fancybox="images" href="<?php echo $image['url']; ?>" data-width="1500" data-height="1000">
									<img src="<?php the_sub_field('img') ?>"/>
								</a>
							</div>
						</div>
						<?php   endwhile; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<section class="show-pagehome clearfix">
		<div class="pagehome-inner clearfix">
			<?php if( have_rows('thiet_ke','option') ): ?>
			<?php while ( have_rows('thiet_ke','option') ) : the_row(); ?>
			<div class="wrap-pagehome container">
				<div class="pagehome-details entry-content clearfix">
					<div class="pagehomefull-title">
						<h2 class="pagehome-title" style=""><?php the_sub_field('tilte'); ?></h2>
						<h3 class="pagehome-subtitle" style=""><?php the_sub_field('name'); ?></h3>
					</div>
				</div>
				<div class="gallery row clearfix">
					<?php $images = get_sub_field('gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="col-md-3">
						<div class="img">
							<a class="d-block" data-fancybox="images" href="<?php echo $image['url']; ?>" data-width="1500" data-height="1000">
								<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
							<p class="wp-caption-text"><span class="wpcaptext-title"><?php echo $image['caption']; ?></span><span class="wpcaptext-border"></span></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif;
			endwhile;
			else :
			endif; ?>
		</div>
	</section>
	<div class="shownews-home clearfix">
		<?php
		$term = get_field('tin','option');
		if(( $term )): ?>
		<div class="wrap-shownewshome container">
			<h2 class="shownewshome-title"><?php echo get_cat_name($term); ?></h2>
			<div class="shownewshome-details row">
				<?php       $args=array(
				'cat' => $term,
				'posts_per_page'=> 4,
				'caller_get_posts'=>1
				);
				$test = new wp_query( $args );
				if( $test->have_posts() ) {
				while( $test->have_posts() ) {
				$test->the_post(); ?>
				<div class="col-md-6">
					<div class="newshomebox clearfix">
						<div class="newshomebox-details clearfix">
							<a href="<?php the_permalink();?>" class="newshomebox-thumb">
								<?php the_post_thumbnail();?>
							</a>
							<div class="newshomeboxinfo clearfix">
								<h3 class="newshomeboxinfo-name"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								<div class="newshomeboxinfo-desc clearfix">
									<p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }  }?>
			</div>
			<p class="shownewshome-click"><a href="<?php echo get_category_link($term )?>">Xem thêm</a></p>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>