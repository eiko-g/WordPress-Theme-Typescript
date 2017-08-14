<?php
// 初始化主题
$theme_info = wp_get_theme();
define('R_THEME_VERSION', $theme_info->get('Version'));
if ( !function_exists('theme_typescript_setup') ) {
    function theme_typescript_setup() {
        /*
          各种 Theme support
          https://codex.wordpress.org/Function_Reference/add_theme_support
        */
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ] );
        add_theme_support( 'post-formats', [
            'status',
        ] );

        // 特色图片支持
        add_image_size('thumbnail-img', 1000, 600);

        // 多语言支持
        // 还是懒
        // load_theme_textdomain( 'heya', get_template_directory() . '/languages' );

        // 注册菜单
        register_nav_menus( [
            'primary' => '主菜单',
        ] );
    }
}
add_action( 'after_setup_theme', 'theme_typescript_setup' );

// 载入各种
function theme_typescript_loading() {
    wp_register_script( 'main-script', get_template_directory_uri() . '/scripts/main.js',[ 'jquery' ], R_THEME_VERSION, true);
    wp_enqueue_script( 'main-script' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css', '', R_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'theme_typescript_loading' );

/*
  自定义用户设置页的社交联系方式
*/
function bigfa_modify_user_contact_methods( $user_contact ){
    $user_contact['github'] = __('Github');
    $user_contact['gplus'] = __('Google+ 数字ID');
    $user_contact['twitter'] = __('Twitter');
    $user_contact['weibo'] = __('微博链接');
    return $user_contact;
}
add_filter('user_contactmethods', 'bigfa_modify_user_contact_methods');