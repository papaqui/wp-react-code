<?php
/*
Plugin Name:    Find Your Template
Description:    Displays the current template being used.
Version:        1.0.0
Author:         Fernando Papaqui
Author URI:     https://www.fernandopapaqui.dev/
*/

function find_your_template() {
    if ( is_super_admin() && is_admin_bar_showing() ) {
        global $template;
        echo '<div style="position: fixed; top: 32px; left: 0; background: #000; color: #fff; padding: 5px; z-index: 9999;">';
        echo 'Current Template: ' . basename($template);
        echo '<br />';
        echo plugin_dir_path( __FILE__ );
        echo '</div>';

    }
}

add_action('wp_footer', 'find_your_template');