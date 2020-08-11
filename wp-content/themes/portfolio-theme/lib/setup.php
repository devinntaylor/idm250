<?php 

// CSS
function include_css_files() {

    // fonts would go here

    wp_enqueue_style('idm250-css', '/wp-content/themes/portfolio-theme/dist/css/style.css');

}

add_action('wp_enqueue_scripts', 'include_css_files');


// JS
function include_js_files() {
    wp_enqueue_script('idm250-js', '/wp-content/themes/portfolio-theme/dist/scripts/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'include_js_files');


// REGISTER MENU
function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        // 'footer_menu' => 'Footer Menu',
        'social_menu' => 'Social Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');


// function default_page_menu() {
//    wp_list_pages('title_li=');
// } 


// ENABLE SUPPORT FOR POST THUMBNAILS ON POSTS AND PAGES
function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');


// REGISTER CUSTOM SIDEBAR FOR THEME
function register_theme_sidebar() {
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'This is a custom sidebar for my theme'
    ]);

// CAN ADD MORE THAN 1 
register_sidebar([
    'name' => 'Footer Column 1',
    'id' => 'footer-column-1',
    'description' => 'This is a footer column for my theme'
]);
}

add_action ('widgets_init', 'register_theme_sidebar');