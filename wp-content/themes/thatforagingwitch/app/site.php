<?php

add_filter('use_block_editor_for_post', '__return_false');
add_filter('wp_title', function ($string) {
    if (is_front_page())
        return get_bloginfo();
    return $string;
});
