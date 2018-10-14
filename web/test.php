<?php
define('SUN_DEBUG', true);
require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/test.php';

$application = new Rxlisbest\Sun\Application($config);
$application->run();
