<?php
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('residential-style', get_stylesheet_uri());
    wp_enqueue_style('residential-main', get_template_directory_uri() . '/assets/css/style.css', [], null);
    wp_enqueue_script('residential-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);

});

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'header_menu' => 'Главное меню',
    ]);
});

