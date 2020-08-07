<?php 

function include_css_files() {

    // fonts would go here

    wp_enqueue_style('idm250-css', '/wp-content/themes/portfolio-theme/dist/css/style.css');

}

add_action('wp_enqueue_scripts', 'include_css_files');


function include_js_files() {
    wp_enqueue_script('idm250-js', '/wp-content/themes/portfolio-theme/dist/scripts/main.js');
}

add_action('wp_enqueue_scripts', 'include_js_files');