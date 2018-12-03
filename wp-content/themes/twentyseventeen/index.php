



<?php get_header(); ?>

<div class="container-home">
	<section class="show-pagehome clearfix">
		<div class="container">

			<div class="row">
			<div class="col-md-6 col-xs-12s">
				<?php $rows = get_field('gioi_thieu','option');if($rows){foreach($rows as $row){ ?>
					<div class="pagehome-inner" style="">
						<div class="">
							<div class="pagehome-details entry-content clearfix">
								<h2 style="text-align: center;"><span style="font-size: 24pt; color: #005543;"><?php echo  $row['title'] ?></span></h2>
								<h3  class="title_sub"  style="text-align: center;"><span style="color: #d7af52; font-size: 18pt;"><?php echo  $row['name'] ?></span></h3>
							</div>
						</div>
						<div class="content_1 content_border">
							<?php echo  $row['content'] ?>
						</div>
					</div>
				<?php } } ?>
			</div>
			<div class="col-md-6 col-xs-12">

				<?php $rows = get_field('nhac','option');if($rows){foreach($rows as $row){ ?>
					<div class="pagehome-inner" style="">
						<div class="">
							<div class="pagehome-details entry-content clearfix">
								<h2 style="text-align: center;"><span style="font-size: 24pt; color: #005543;"><?php echo  $row['title'] ?></span></h2>
								<h3  class="title_sub" style="text-align: center;"><span style="color: #d7af52; font-size: 18pt;"><?php echo  $row['name'] ?></span></h3>
							</div>
						</div>


						<div class="content_1 content_border">
							<?php echo  $row['content'] ?>
						</div>

					</div>
				<?php } } ?>
			</div>
			<div class="col-md-6 col-xs-12">

				<?php $rows = get_field('video','option');if($rows){foreach($rows as $row){ ?>
					<div class="pagehome-inner" style="">
						<div class="">
							<div class="pagehome-details entry-content clearfix">
								<h2 style="text-align: center;"><span style="font-size: 24pt; color: #005543;"><?php echo  $row['title'] ?></span></h2>
								<h3   class="title_sub" style="text-align: center;"><span style="color: #d7af52; font-size: 18pt;"><?php echo  $row['name'] ?></span></h3>
							</div>
						</div>


						<div class="content_1 content_border">
							<?php echo  $row['content'] ?>
						</div>

					</div>
				<?php } } ?>
			</div>
			<div class="col-md-6 col-xs-12">
				<?php $rows = get_field('thong_tin_them','option');if($rows){foreach($rows as $row){ ?>
					<div class="pagehome-inner" style="">
						<div class="">
							<div class="pagehome-details entry-content clearfix">
								<h2 style="text-align: center;"><span style="font-size: 24pt; color: #005543;"><?php echo  $row['title'] ?></span></h2>
								<h3  class="title_sub" style="text-align: center;"><span style="color: #d7af52; font-size: 18pt;"><?php echo  $row['name'] ?></span></h3>
							</div>
						</div>


						<div class="content_1 content_border">
							<?php echo  $row['content'] ?>
						</div>

					</div>
				<?php } } ?>
			</div>

		</div>
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