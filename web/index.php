<?php
define('SUN_DEBUG', true);
require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/config.php';

$application = new Rxlisbest\Sun\Web\Application($config);
$application->run();
