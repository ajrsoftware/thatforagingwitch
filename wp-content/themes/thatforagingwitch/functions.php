<?php

use App\Http\Lumberjack;

define('THEME_NAME', 'thatforagingwitch');
define('THEME_VERSION', '1.0');

require_once('vendor/autoload.php');
$app = require_once('bootstrap/app.php');

$lumberjack = $app->make(Lumberjack::class);
$lumberjack->bootstrap();

require_once('app/routes.php');
require_once('app/site.php');

