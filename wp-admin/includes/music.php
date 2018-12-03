<?php
function add_admin_menu()
{
    add_menu_page (
            'Thư viện âm nhạc', 
            'Thư viện âm nhạc', 
            'manage_categories', 
            'thu-vien-am-nhac', 
            'show_plugin_musics', 
            '', 
            '2'
    );
}
 
function show_plugin_musics()
{
    echo '<h1>Đây là trang Plugin Options</h1>';
}
add_action('admin_menu', 'add_admin_menu');

function add_admin_submenu()
{
    add_submenu_page ('thu-vien-am-nhac', 'Viết bài mới', 'Viết bài mới', 'manage_options', 'viet-bai-moi', 'show_add_music' );
    add_submenu_page ('thu-vien-am-nhac', 'Chuyên mục', 'Chuyên mục', 'manage_options', 'chuyen-muc', 'show_category_music' );
}
 
function show_add_music()
{
    echo '<h1>Đây là trang Plugin Options - General Settings</h1>';
}
 
function show_category_music()
{
    echo '<h1>Đây là trang Plugin Options - Advanced Settings</h1>';
}
 
 
add_action('admin_menu', 'add_admin_submenu');
?>