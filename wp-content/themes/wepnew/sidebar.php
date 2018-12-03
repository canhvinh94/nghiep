<div class="sidebar-content clearfix">
	<?php
    $term = get_field('show_tin','option');
    if(( $term )): ?>
	<div class="widget clearfix">
		<div class="widget-title">Tin nổi bật</div>
		<?php       $args=array(
            'cat' => $term,
            'posts_per_page'=> 5, // Number of related posts that will be shown.
            'caller_get_posts'=>1
            );
            $my_query = new wp_query( $args );
            if( $my_query->have_posts() ) {
            while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
		<div class="item-post-sb clearfix">
			<div class="pad5">
				<div class="col-md-4"><div class="box-img-pt"><a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a></div></div>
				<div class="col-md-8">
					<div class="box-title-pts"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
				</div>
			</div>
		</div>
		<?php }  }?>
	</div>
	<?php endif; ?>
</div>