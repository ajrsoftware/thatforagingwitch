<?php

add_filter('timber_context', [$lumberjack, 'addToContext']);
add_filter('use_block_editor_for_post', '__return_false');
