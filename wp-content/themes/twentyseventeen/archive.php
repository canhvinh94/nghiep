<?php get_header(); $a=get_query_var('cat' );?>
<div class="banner">
    <img src="<?php the_field('banner_trang_trong','option')?>">
</div>
<div id="maincontent">
    <div class="container clearfix">
        <div class="row">
            <div class="content col-md-8">
                <div class="breadcrumb" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display')){ bcn_display();}?>
                </div>
                <h1 class="shownews-title"><span><?php echo single_cat_title();?></span></h1>
                <div class="wrap-shownews clearfix">
                    <?php if(have_posts()){ while(have_posts()):the_post();$format=get_post_format();setPostViews($post->ID); ?>
                    <div class="box-news clearfix">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                        <p class="news-name"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                        <p class="news-time"><?php the_time('d/m/Y') ?></p>
                        <div class="description-news"><p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p></div>
                    </div>
                    <?php endwhile;wp_reset_postdata(); wp_pagenavi();?>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-4 sidebar">
                <?php dynamic_sidebar( 'left' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- end #maincontent-->
<?php get_footer(); ?>