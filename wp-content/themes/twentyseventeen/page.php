<?php get_header(); ?>
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
                <?php while(have_posts()):the_post(); ?>
                <h1 class="shownews-title"><span><?php the_title();?></span></h1>
                <div class="content-post entry-content">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="col-md-4 sidebar">
                <?php dynamic_sidebar( 'left' ); ?>
            </div>
        </div>
    </div>
</div>
<!--end maincontent-->
<?php get_footer(); ?>