<?php

define('THEME_NAME', 'thatforagingwitch');
define('THEME_VERSION', '1.0');

include('app/bootstrap.php');
include('app/include/acf.php');
include('app/Site.php');

new Site();
