<?php
/**
 *
 */
$database = require(__DIR__ . '/database.php');

return [
    'base_path' => dirname(__DIR__),
    'path_info' => true,
    'database' => $database
];