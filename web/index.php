<?php
define('SUN_DEBUG', true);
require '../vendor/autoload.php';

$config = require __DIR__ . '/../config/config.php';

$application = new Rxlisbest\Sun\Application($config);
$application->run();
