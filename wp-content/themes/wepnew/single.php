<?php get_header();wp_reset_query();  $format = get_post_format();?>
<?php $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "ids"));;$a=$post->ID; ?>
<div class="banner">
    <img src="<?php the_field('banner_trang_trong','option')?>">
</div>
<div id="maincontent">
    <div class="container clearfix">
        <div class="box-content clearfix">
            <div class="row">
                <div class="content col-md-8">
                    <div class="breadcrumb" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php if(function_exists('bcn_display')){ bcn_display();}?>
                    </div>
                    <div class="all-box clearfix">
                        <?php wp_reset_query();?>
                        <?php while(have_posts()):the_post();setPostViews($post->ID); ?>
                        <h1 class="showsingle-title"><?php the_title();?></h1>
                        <p class="news-time"><?php the_time('d/m/Y') ?></p>
                        <div class="content-post entry-content clearfix">
                            <?php the_content(); ?>
                        </div>
                        <div class="tags clearfix">
                            <?php the_tags( '<span><i class="fa fa-tags" aria-hidden="true"></i> Tags: </span>', ' '); ?>
                        </div>
                        <?php endwhile; ?>
                        <div id="fb-root"></div>
                        <script>
                        (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=500991956775798";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="5" data-width="100%"></div>
                    </div>
                    <div class="relatedpost show-news clearfix">
                        <h3 class="shownews-title"><span>BÀI VIẾT LIÊN QUAN</span></h3>
                        <div class="wrap-shownews">
                            <?php $bvlq=new WP_Query(array( 'showposts'=>6,'category__in'=>$term_list,'post__not_in'=>array($a))); while($bvlq->have_posts()) :$bvlq->the_post();?>
                            <div class="box-news clearfix">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                <p class="news-name"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                                <p class="news-time"><?php the_time('d/m/Y') ?></p>
                                <div class="description-news"><p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p></div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <?php dynamic_sidebar( 'left' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>