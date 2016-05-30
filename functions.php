<?php
function r_theme_prefix_setup()
{
    /*
      各种 Theme support
      https://codex.wordpress.org/Function_Reference/add_theme_support
    */
    add_theme_support('title-tag'); // 站点标题
    add_theme_support('automatic-feed-links'); // 订阅链接
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    )); // HTML5 格式

    add_theme_support('custom-logo', array(
        'height' => 72,
        'width' => 144,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => array('site-title', 'site-description'),
    )); // 自定义 Logo
}
add_action( 'after_setup_theme', 'r_theme_prefix_setup' );

$theme_info = wp_get_theme();
define('R_THEME_VERSION', $theme_info->get('Version'));

/*
  注册菜单
*/
register_nav_menus(array('header-menu' => '主菜单'));

/*
  注册各种
*/
function r_theme_loading() {
    wp_register_script( 'main-script', get_template_directory_uri() . '/script/main.js',array( 'jquery' ), R_THEME_VERSION);
    wp_enqueue_script( 'main-script' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', '', '4.1.1' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css', '', R_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'r_theme_loading' );

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