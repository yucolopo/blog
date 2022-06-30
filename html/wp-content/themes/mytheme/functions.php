<?php

function wpdocker_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('footer-menu', 'フッターメニュー');
}

add_action('after_setup_theme', 'wpdocker_setup');