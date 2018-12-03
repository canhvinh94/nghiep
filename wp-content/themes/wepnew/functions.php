<?php
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
$first_img = "/images/default.jpg"; //Duong dan anh mac dinh khi khong tim duoc anh dai dien
}
return $first_img;
}
add_theme_support( 'post-formats', array( 'aside' ,'chat') );
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Quản Lý Trang',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
				'redirect'		=> false
	));
	//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );
//customize the PageNavi HTML before it is output
function ik_pagination($html) {
$out = '';
//wrap a's and span's in li's
$out = str_replace("<div","",$html);
		$out = str_replace("class='wp-pagenavi'>","",$out);
		$out = str_replace("<a","<li><a",$out);
		$out = str_replace("</a>","</a></li>",$out);
		$out = str_replace("<span","<li><span",$out);
		$out = str_replace("</span>","</span></li>",$out);
$out = str_replace("</div>","",$out);
return '<div class="pagination-wrap">
<ul class="pagination">'.$out.'</ul>
</div>';
}
	
}
class Home_style_2 extends WP_Widget {
	function Home_style_2(){
		parent::WP_Widget('Home_style_2',
				'Sidebar Tin',
				array('description' => ''));
	}
	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );
		echo $before_widget;
?>
<h3 class="widget-title"><?php echo ($title);?></h3>
<div class="widget-details cat-post-widget">
<ul class="category-posts-internal clearfix">
	<?php $new=new WP_Query('showposts=10&cat='.$sp);
	while($new->have_posts()) : $new->the_post();  ?>
	<li class="cat-post-item clearfix">
		<div class="img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a></div>
		<div class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
	</li>
	<?php endwhile;?>
</ul>
</div>
<?php
echo $after_widget;
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
return $instance;
}
function form( $instance ) {
$instance = wp_parse_args( (array) $instance,
	array( 'title' => '', 'sp' => '', 'sl' => '' ) );
$title = strip_tags($instance['title']);
$sp = ($instance['sp']);$sl = ($instance['sl']);
?>
<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title?>" />
		</p>
<p>
	<label for="<?php echo $this->get_field_id('sp'); ?>">
	<?php _e('Id Chuyên Mục.'); ?> </label>
	<select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
		<?php $args = array(
				'orderby' => 'name','hide_empty'=>0,
				'order' => 'ASC'
		);$categories=get_categories( $args ); foreach($categories as $category) {?>
		<option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
		<?php } ?>
	</select>
</p>
<?php
	}
}
register_widget('Home_style_2');
function wpdocs_custom_excerpt_length( $length ) {
return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
	add_theme_support('post-thumbnails');
	register_nav_menu( 'main', 'Main Menu' );register_nav_menu( 'top', 'Top Menu' );
	
	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	register_sidebar( array(
		'name'          => __( 'Sidebar ', 'theme_text_domain' ),
		'id'            => 'left',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>'
	) );
	function remove_default_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
	
	}
		add_action('widgets_init', 'remove_default_widgets', 11);
	function getPostViews($postID){ // hàm này dùng để lấy số người đã xem qua bài viết
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){ // Nếu như lượt xem không có
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	return "0"; // giá trị trả về bằng 0
	}
	return $count; // Trả về giá trị lượt xem
	}
	function setPostViews($postID) {// hàm này dùng để set và update số lượt người xem bài viết.
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
	$count = 0;
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	}else{
	$count++; // cộng đồn view
	update_post_meta($postID, $count_key, $count); // update count
	}
	}