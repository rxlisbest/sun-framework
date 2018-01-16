<?php
define('SUN_DEBUG', true);

require '../vendor/autoload.php';

$application = new Rxlisbest\Sun\Application();
$application->run();
