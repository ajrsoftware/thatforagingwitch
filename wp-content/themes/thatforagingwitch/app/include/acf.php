<?php

define('MY_ACF_PATH', get_stylesheet_directory() . '/lib/advanced-custom-fields/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/lib/advanced-custom-fields/');

include_once(MY_ACF_PATH . 'acf.php');

function my_acf_settings_url(string $url): string
{
    return MY_ACF_URL;
}

function my_acf_settings_show_admin(bool $show_admin): bool
{
    if (current_user_can('install_plugins')) {
        return true;
    } else {
        return false;
    }
}

add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
add_filter('acf/settings/url', 'my_acf_settings_url');
