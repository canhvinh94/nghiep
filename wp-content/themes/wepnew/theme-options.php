<?php 
add_action('admin_menu', 'origin_menu_page');

function origin_menu_page() {
    add_theme_page('Origin Theme Option', 'Theme Option', 'manage_options', 'origin-theme-option', 'origin_setting_page');
}
add_action('admin_init','origin_register_setting');

function origin_register_setting() {
    register_setting('origin-group','origin-logo');
    register_setting('origin-group','origin-favicon');

}

function origin_setting_page() { ?>
    <div class="wrap">
        <?php screen_icon(); ?>
        <h2>Origin Setting Page</h2>
        <form id="origin_setting" method="post" action="options.php">
        <?php settings_fields('origin-group'); ?>
            <table class="origin_page">
                <tr valign="top">
                    <th scope="row">Logo images Link</th>
                    <td><input style="width:500px;"type="text" value="<?php echo get_option('origin-logo'); ?>" name="origin-logo" /></td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">Favicon Images Link</th>
                    <td><input  style="width:500px;" type="text" value="<?php echo get_option('origin-favicon'); ?>" name="origin-favicon" /></td>
                </tr>
                
               
            </table>
            <?php submit_button(); ?>
        </form> 
    </div>
<?php }
?>