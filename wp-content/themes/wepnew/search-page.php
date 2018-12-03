<?php //Template Name: Search
get_header();
global $wp_query;
$tax = $wp_query->get_queried_object()->term_id;
?>
	<div id="maincontent">
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="content">
			<div class="breadcrumbs">
			    <?php if(function_exists('bcn_display'))
			    { bcn_display();}?>
			</div> 
			<h1 class="ttlvip-archive">
				Tìm kiếm: <?php if($_GET['qh']!=0){echo 'Quận/huyện:'.name($_GET['qh'],'danh-muc-quan-huyen'); }?>
				<?php if($_GET['px']!=0){echo ' phường/xã: '.name($_GET['px'],'phuong-xa').''; }?>
				<?php if($_GET['dp']!=0){echo ' đường/phố: '.name($_GET['dp'],'duong-pho').''; }?> 
				<?php if($_GET['da']!=0){echo ' dự án: '.name($_GET['da'],'du-an').''; }?>  
				<?php if($_GET['gia']!=0){echo ' giá: '.name($_GET['gia'],'gia').''; }?>
				<?php if($_GET['dt']!=0){echo ' diện tích: '.name($_GET['dt'],'dien-tich').''; }?> 
				<?php if($_GET['pn']!=0){echo ' phòng ngủ: '.name($_GET['pn'],'phong-ngu').''; }?> 
				<?php if($_GET['hn']!=0){echo ' hướng nhà: '.name($_GET['hn'],'huong-nha').''; }?> 
			</h1>
			<?php 
				if (isset($_GET['qh']) and $_GET['qh'] != '0' && $_GET['qh'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['qh']) );
				         $qh = array(
				             'taxonomy'     => 'danh-muc-quan-huyen',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				} 
				if (isset($_GET['px']) and $_GET['px'] != '0' && $_GET['px'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['px']) );
				         $px = array(
				             'taxonomy'     => 'phuong-xa',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				}
				if (isset($_GET['dp']) and $_GET['dp'] != '0' && $_GET['dp'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['dp']) );
				         $px = array(
				             'taxonomy'     => 'duong-pho',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				} 
				if (isset($_GET['da']) and $_GET['da'] != '0' && $_GET['da'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['da']) );
				         $px = array(
				             'taxonomy'     => 'du-an',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				}
				if (isset($_GET['gia']) and $_GET['gia'] != '0' && $_GET['gia'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['gia']) );
				         $px = array(
				             'taxonomy'     => 'gia',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				}
				if (isset($_GET['dt']) and $_GET['dt'] != '0' && $_GET['dt'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['dt']) );
				         $px = array(
				             'taxonomy'     => 'dien-tich',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				}
				if (isset($_GET['pn']) and $_GET['pn'] != '0' && $_GET['pn'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['pn']) );
				         $px = array(
				             'taxonomy'     => 'phong-ngu',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				}
				if (isset($_GET['hn']) and $_GET['hn'] != '0' && $_GET['hn'] != '') {
				         $taxcity[] = sanitize_title ( ($_GET['nh']) );
				         $px = array(
				             'taxonomy'     => 'huong-nha',
				             'field'        => 'id',
				             'terms'        => $taxcity
				         );
				        
				}

  				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
							'post_type'=>'sanpham',
					        'post_status'     => 'publish',
					        'paged'           => $paged,
					        'tax_query'       => array(
					                                   'relation' => 'AND',
					                                   $qh,
					                                   $px,
					                                   $dp,
					                                   $da,
					                                   $gia,
					                                   $dt,
					                                   $pn,
					                                   $hn
					                               )
					    );  ?>

				<div class="sum-home">
					
					<?php $new=new WP_Query($args);if($new->have_posts()){
						while($new->have_posts()): $new->the_post(); ?>
						<div class="home-child">
							<div class="home-child-left ">
								<a href="<?php the_permalink(); ?>">
									<?php 
		   								$default = "<img src='".get_stylesheet_directory_uri()."/images/default.png' alt='no_thumb' />"; 
	   								?>
	   								<?php 
	   									if(has_post_thumbnail()) the_post_thumbnail("medium",array("alt" => get_the_title()));
	                               	 	else echo $default;
	                               	?>
								</a>
							</div>
							<ul class="home-child-right">
								<li class="home-child1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span> (<?php the_time('d/m/Y'); ?>)</span></li>
								<li class="home-child2"><span class="ngangtrai">Mức giá</span><?php the_field('muc_gia'); ?> Triệu/tháng</li>
								<li class="home-child3"><span class="ngangtrai">Diện tích</span><?php the_field('dien_tich'); ?> m²</li>
								<li class="home-child4"><span class="ngangtrai">Quận / Huyện</span><?php echo tax();?></li>
							</ul>
						</div>
					<?php endwhile;wp_reset_postdata(); wp_pagenavi(array('query'=>$new)) ?>
					<?php }else{
						echo 'Không tìm thấy sản phẩm nào theo yêu cầu tìm kiếm! ';
					} ?>
				</div>
			

		</div>
				
						
		</div><!--end maincontent-->
	</div>
<?php get_footer(); ?>		